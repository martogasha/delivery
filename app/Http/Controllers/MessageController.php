<?php

namespace App\Http\Controllers;

use App\Message;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function sendMessage(Request $request){
        if ($request->ajax()){
            $from = Auth::id();
            $to = $request->receiver_id;
            $message = $request->message;

            $data = new Message();
            $data->from = $from;
            $data->to = $to;
            $data->message = $message;
            $data->is_read = 0;
            $data->save();
        }
    }
}
