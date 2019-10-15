<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaffAuthController extends Controller
{
    public function signup()
    {
        return view('auth/signup');
    }

    public function signin()
    {
        return view('auth/signin');
    }

    public function reset()
    {
        return view('auth/reset');
    }
}
