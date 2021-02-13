<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Events\Searching;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrierController extends Controller
{
    public function home(){
        $bookings = Booking::all();
        return view('carrier.index',[
            'bookings'=>$bookings
        ]);
    }
    public function carrierDirection($id){
        $booking = Booking::find($id);
        $carrier_id = Auth::id();
        $updateCarrier = Booking::where('id',$id)->update(['carrier_id'=>($carrier_id)]);
        if ($booking->carrier_id==null) {
            event(new Searching($carrier_id));
        }
        return view('carrier.direction',[
            'booking'=>$booking
        ]);
    }
}
