<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email()
    {
        return view('marketing.broadcast.email.email', [
            'sidemenuActive' => 'broadcast',
            'sidemenuSubActive' => 'email',

        ]);
    }
}
