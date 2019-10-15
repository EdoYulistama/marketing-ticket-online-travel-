<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DiscountsController extends Controller
{
    public function discount()
    {
        return view('marketing.loyalty.discount.discount', [
            'sidemenuActive' => 'loyalty',
            'sidemenuSubActive' => 'discount',

        ]);
    }
}
