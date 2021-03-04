<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Events\Searching;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrierController extends Controller
{
    public function home(){
        $bookings = Booking::where('carrier_id',Auth::id())->orWhere('carrier_id',null)->get();
        return view('carrier.index',[
            'bookings'=>$bookings
        ]);
    }
    public function message($id){
        $booking = Booking::where('user_id',$id)->first();
        $messages = Message::where('from',$id)->where('to',Auth::id())->orWhere('from',Auth::id())->where('to',$id)->get();
        return view('carrier.message',[
            'booking'=>$booking,
            'messages'=>$messages
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
