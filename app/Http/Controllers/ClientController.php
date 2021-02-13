<?php

namespace App\Http\Controllers;

use App\Booking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('client.index');
        }
        else{
            return redirect(url('Login'))->with('error','Session Expired');
        }
    }
    public function booking(){
        $user = User::where('id',Auth::id())->first();
        return view('client.booking',[
            'user'=>$user
        ]);
    }
    public function pickup(){
        $user = User::where('id',Auth::id())->first();
        return view('client.pickup',[
            'user'=>$user
        ]);    }
    public function lorry(){
        $user = User::where('id',Auth::id())->first();
        return view('client.lorry',[
            'user'=>$user
        ]);    }
    public function trans(){
        $user = User::where('id',Auth::id())->first();
        return view('client.transist',[
            'user'=>$user
        ]);    }
    public function bookings(){
        $bookings = Booking::where('user_id',Auth::id())->get();
        return view('client.bookings',[
            'bookings'=>$bookings

        ]);
    }
    public function direction($id){
        $booking = Booking::find($id);
        return view('client.direction',[
            'booking'=>$booking
        ]);
    }
    public function carrierSearch(Request $request){
        if ($request->ajax()){
            $output = "";
            $getCarrier = User::find($request->carrier_id);
            $booking = Booking::find($request->booking_id);
            $output = '
                                            <div class="mr-car-box">
                                    <div class="mr-car-title">'.$getCarrier->first_name.' '.$getCarrier->last_name.'</div>
                                    <div class="cd" style="font-size:15px"><b>'.$getCarrier->plates.'</b></div>
                                    <div class="cd"><b>'.$getCarrier->phone.'</b></div>
                                    <div class="cd">'.$getCarrier->carrier.'</div>
                                    <div class="mr-car-code">'.$booking->amount.'/=</div>
                                </div>

            ';
        }
        return $output;
    }
    public function displayCarrier(Request $request){
        if ($request->ajax()){
            $output = "";
            $getCarrier = User::find($request->carrier_id);
            $booking = Booking::find($request->booking_id);
            $output = '
                                            <div class="mr-car-box">
                                    <div class="mr-car-title">'.$getCarrier->first_name.' '.$getCarrier->last_name.'</div>
                                    <div class="cd" style="font-size:15px"><b>'.$getCarrier->plates.'</b></div>
                                    <div class="cd"><b>'.$getCarrier->phone.'</b></div>
                                    <div class="cd">'.$getCarrier->carrier.'</div>
                                    <div class="mr-car-code">'.$booking->amount.'/=</div>
                                </div>

            ';
        }
        return $output;
    }
    public function location(Request $request){
        if ($request->ajax()){
            $updateLocation = User::find($request->user_id);
            $updateLocation->originLat = $request->lat;
            $updateLocation->originLng = $request->lng;
            $updateLocation->save();
        }
    }
}
