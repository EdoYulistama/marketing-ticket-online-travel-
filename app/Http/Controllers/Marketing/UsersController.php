<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;
use App\Models\Marketing\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct(user $user)
    {
        $this->user = $user;
    }
    public function users()
    {
        return view('marketing.users.users', [
            'sidemenuActive' => 'users',
            'sidemenuSubActive' => '',

        ]);
    }

    public function user()
    {
        return $this->user->users();
    }
}
