<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms()
    {
        return view('marketing.broadcast.sms.sms', [
            'sidemenuActive' => 'broadcast',
            'sidemenuSubActive' => 'sms',

        ]);
    }
}
