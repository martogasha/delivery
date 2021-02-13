<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book(Request $request){
        $book = new Booking();
        $book->first_name = $request->input('first_name');
        $book->last_name = $request->input('last_name');
        $book->phone = $request->input('phone');
        $book->weight = $request->input('weight');
        if ($request->picture) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $book->picture = $filename;
        }
        $book->originLat = $request->input('originLat');
        $book->originLng = $request->input('originLng');
        $book->destinationLat = $request->input('destinationLat');
        $book->destinationLng = $request->input('destinationLng');
        $book->description = $request->input('description');
        $book->type = $request->input('type');
        $book->distance = $request->input('distance');
        $book->amount = $request->input('totalPrice');
        $book->status = 0;
        $book->user_id = Auth::id();
        $book->save();
        return redirect(url('bookings'))->with('success','Booked Successfully Searching for Nearby Carrier');
    }
}
