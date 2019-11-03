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
        $data = $this->user->summaryusers();
        return view('marketing.users.users', [
            'sidemenuActive' => 'users',
            'sidemenuSubActive' => '',
            'data' => $data

        ]);
    }

    public function user()
    {
        return $this->user->users();
    }

    public function summaryusers()
    {
        return $this->user->summaryusers();
    }

    public function usersyearly()
    {
        return $this->user->usersyearly();
    }

    public function usersday()
    {
        return $this->user->usersweekly();
    }
}
