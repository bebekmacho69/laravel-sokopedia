<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index() {
        $getProducts = DB::table('products')->get();
        return view('index',[
            'viewProducts' => $getProducts
        ]);
    }
    public function indexUser() {
        $getProducts = DB::table('products')->get();
        return view('indexUser',[
            'viewProducts' => $getProducts
        ]);
    }
    public function indexGuest() {
        $getProducts = DB::table('products')->get();
        return view('indexGuest',[
            'viewProducts' => $getProducts
        ]);
    }
}
