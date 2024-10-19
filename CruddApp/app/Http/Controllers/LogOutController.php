<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logoutUser()
    {
        if (Session::has('LoginId')) {
            Session::pull('LoginId');
            return redirect('login')->with('fail', 'User Logged Out!!');
        }
    }
}
