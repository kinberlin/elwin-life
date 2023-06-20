<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/')->with('success', "Successfully logged out.");
    }
}
