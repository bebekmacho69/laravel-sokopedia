<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\products;
use Redirect,Response;

class adminController extends Controller
{
    public function admin() {
        return view ('home');
    }

    public function listProducts() {
        $thisProducts = DB::table('products')->get();
        return view ('admin.listProducts', [
            'products' => $thisProducts 
        ]);
    }

    public function listCategory() {
        $thisCategory = DB::table('categories')->get();
        return view ('admin.listCategory', [
            'categories' => $thisCategory 
        ]);
    }

    public function editProduct()
	{
        // TODO
        return view ('admin.editProduct');
    }

    public function editCategory()
	{
        // TODO
        return view ('admin.editCategory');
    }
    
    public function deleteProduct($id) {
        // TODO
    }
}
