<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Guard;

class SuperLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function authenticateSuperUser(Request $request){

        if(Auth::guard('superusers')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return view('welcome');    
        } else {
            //return redirect("/login");
        }
    }


    function superLogout(Request $request){
        $redirect = "";
        if (Auth::guard('superusers')->check()){    
            $redirect = "/";       
        } else {
            $redirect="/login";
        }

        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect($redirect);
    }
    
}
