<?php

namespace App\Http\Controllers;

use App\Models\Pubs;
use DB;
use Carbon\Carbon;
use App\Models\Users;
use Mail;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;

class AuthController extends Controller
{
    //
    public function perform()
    {
        Session::flush();

        Auth::logout();

        return redirect('/')->with('error', "Successfully logged out.");
    }


}