<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CashbacksController extends Controller
{
    public function cashback()
    {
        return view('marketing.loyalty.cashback.cashback', [
            'sidemenuActive' => 'loyalty',
            'sidemenuSubActive' => 'cashback',

        ]);
    }
}
