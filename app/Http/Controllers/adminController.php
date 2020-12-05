<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function admin() {
        return view ('home');
    }

    public function crudProducts() {
        $thisProducts = DB::table('products')->get();
        return view ('crudProducts', [
            'products' => $thisProducts 
        ]);
    }
}
