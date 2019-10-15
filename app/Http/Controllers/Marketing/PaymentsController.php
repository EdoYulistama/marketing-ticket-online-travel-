<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function payment()
    {
        return view('marketing.payment.payment', [
            'sidemenuActive' => 'payment',
            'sidemenuSubActive' => '',

        ]);
    }
}
