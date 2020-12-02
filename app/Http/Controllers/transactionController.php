<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transactionController extends Controller
{
    public function transactionCart() {
        return view('cart');
    }

    public function transactionHistory() {
        return view('history');
    }
    public function transactionHistoryDetails() {
        return view('historyDetails');
    }
}
