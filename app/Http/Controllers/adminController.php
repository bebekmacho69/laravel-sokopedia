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

    public function listCategory() {
        $thisCategory = DB::table('categories')->get();
        return view ('admin.listCategory', [
            'categories' => $thisCategory 
        ]);
    }

    public function editCategory()
	{
        // TODO
        return view ('admin.editCategory');
    }

    // PRODUCTS
    public function listProducts() {
        $thisProducts = DB::table('products')->get();
        return view ('admin.listProducts', [
            'products' => $thisProducts 
        ]);
    }

    public function insertProduct(Request $request) {
        DB::table('products')->insert([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDescription' => $request->productDescription,
            'productImage' => $request->productImage,
            'productStock' => $request->productStock
        ]);
        return redirect('listProducts');
    }

    public function editProduct($id) {
        $product = DB::table('products')->where('productID', $id)->get();
        return view('admin.editProduct', [
            'products' => $product
        ]);
    }
    
    // public function editProductPage()
	// {
    //     $product = DB::table('products')->get();
    //     return view('admin.editProduct',['products' => $product]);
    // }
    
    public function deleteProduct($id) {
        DB::table('products')->where('productID', $id)->delete();
        return redirect('listProducts');
    }

    public function updateProduct(Request $request) {
        DB::table('products')->where('productID', $request->productID)->update([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDescription' => $request->productDescription,
            'productImage' => $request->productImage,
            'productStock' => $request->productStock
        ]);
        return redirect('listProducts');
    }
}
