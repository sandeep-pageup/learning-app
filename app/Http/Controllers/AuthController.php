<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function auth(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if(Auth::attempt(['email' => $request->email , 'password' => $request->password] , true)) {
            return "LOGGED IN SUCCESSFULL...";
        } else {
            return "INVALID CREDENTIALS...";
        }   
    }
    public function is_user_loggedin(){
        if(auth()->check())
            return "User Is Logged In.";
        else 
            return "User Is Not Logged In.";
    }
    public function before_logout_session(){
        return session()->all();
    }
    public function after_logout_session(){
        auth()->logout();
        return session()->all();
    }
}
