<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleMapsController extends Controller
{
    public function calculateDistance(Request $request)
    {
        if ($request->ajax()) {
            function getDistance($addressFrom, $addressTo, $unit = '')
            {
                // Google API key
                $apiKey = 'AIzaSyCm2jbUoX9T_MylOzVAaRiXKauyh2DXn_E';

                // Change address format
                $formattedAddrFrom = str_replace(' ', '+', $addressFrom);
                $formattedAddrTo = str_replace(' ', '+', $addressTo);

                // Geocoding API request with start address
                $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddrFrom . '&sensor=false&key=' . $apiKey);
                $outputFrom = json_decode($geocodeFrom);
                if (!empty($outputFrom->error_message)) {
                    return $outputFrom->error_message;
                }

                // Geocoding API request with end address
                $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddrTo . '&sensor=false&key=' . $apiKey);
                $outputTo = json_decode($geocodeTo);
                if (!empty($outputTo->error_message)) {
                    return $outputTo->error_message;
                }

                // Get latitude and longitude from the geodata
                $latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
                $longitudeFrom = $outputFrom->results[0]->geometry->location->lng;
                $latitudeTo = $outputTo->results[0]->geometry->location->lat;
                $longitudeTo = $outputTo->results[0]->geometry->location->lng;

                // Calculate distance between latitude and longitude
                $theta = $longitudeFrom - $longitudeTo;
                $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                $miles = $dist * 60 * 1.1515;

                // Convert unit and return distance
                $unit = strtoupper($unit);
                return round($miles * 1.609344, 2);

            }

            $addressFrom = $request->origin;
            $addressTo = $request->destination;

// Get distance in km
            $distance = getDistance($addressFrom, $addressTo);
            return $distance;
        }
    }
}
