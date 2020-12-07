<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userID = Auth::user()->id;
        $getCart = cart::where('userID',$userID)->first();
        if ($getCart == null) {
            $cart = new cart;
            $cart->userID = $userID;
            $cart->save();
        }
        return view('home');
    }
}