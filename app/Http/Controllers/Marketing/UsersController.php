<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        return view('marketing.users.users', [
            'sidemenuActive' => 'users',
            'sidemenuSubActive' => '',

        ]);
    }
}
