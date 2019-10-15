<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VouchersController extends Controller
{
    public function voucher()
    {
        return view('marketing.loyalty.voucher.voucher', [
            'sidemenuActive' => 'loyalty',
            'sidemenuSubActive' => 'voucher',

        ]);
    }
}
