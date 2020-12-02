<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function indexUser() {
        return view ('indexUser');
    }
    public function indexGuest() {
        return view ('indexGuest');
    }
}
