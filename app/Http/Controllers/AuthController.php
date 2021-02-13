<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function log(Request $request){
        $user = User::where('phone',$request->phone)->first();
        if (Auth::attempt([
            'phone'=>$request->phone,
            'password'=>$request->password,
        ])){
            if ($user->role==0) {
                return redirect(url('index'));
            }
            elseif ($user->role==1){
                return redirect(url('carrierHome'));

            }
            else{
                return redirect()->back()->with('error','Credentials Not Found');
            }
        }

    }
    public function register(){
        return view('auth.register');
    }
    public function reg(Request $request){
        $register = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'idno' => $request->input('idno'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'role'=>$request->input('role'),

        ]);
        return redirect(url('Login'))->with('success','Registered Successfully');
    }
    public function carrierRegister(){
        return view('auth.carrierRegister');
    }
    public function carrierReg(Request $request){
        $register = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'idno' => $request->input('idno'),
            'phone' => $request->input('phone'),
            'carrier' => $request->input('carrier'),
            'plates' => $request->input('plates'),
            'password' => Hash::make($request->input('password')),
            'role'=>$request->input('role'),

        ]);
        return redirect(url('Login'))->with('success','Registered Successfully');
    }
}
