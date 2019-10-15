<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CalculationRulesController extends Controller
{
    public function calculationrule()
    {
        return view('marketing.loyalty.calculationrule.calculationrule', [
            'sidemenuActive' => 'loyalty',
            'sidemenuSubActive' => 'calculationrule',

        ]);
    }
}
