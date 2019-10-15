<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function notification()
    {
        return view('marketing.broadcast.notification.notification', [
            'sidemenuActive' => 'broadcast',
            'sidemenuSubActive' => 'notification',

        ]);
    }
}
