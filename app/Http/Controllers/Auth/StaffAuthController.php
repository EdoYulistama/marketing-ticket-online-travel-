<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Marketing\Staff;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class StaffAuthController extends Controller
{
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function signup()
    {
        return view('auth/signup');
    }
    public function v_signup(Request $request)
    {
        return $this->staff->signup($request->all());
        // return $request;
    }

    public function signin()
    {
        return view('auth/signin');
    }
    public function v_signin(Request $request)
    {
        return $this->staff->signin($request->all());
        // return $request;
    }

    public function reset()
    {
        return view('auth/reset');
    }
}
