<?php

namespace App\Http\Controllers\Marketing;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function transaction()
    {
        return view('marketing.transaction.transaction', [
            'sidemenuActive' => 'transaction',
            'sidemenuSubActive' => '',

        ]);
    }
}
