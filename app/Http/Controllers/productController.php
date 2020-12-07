<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function productDetails() {
        return view('productDetails');
    }

    public function productDetails2($id) {
        $product = DB::table('products')->where('productID', $id)->get();
        return view('productDetails', ['products' => $product]);
    }

    public function toCart() {
        $userID = Auth::user()->id;
        $cartTable = DB::table('cart')->where('userID', $userID)->first();
        
        if ($cartTable == null) {
            DB::table('cart')->insert([
                'userID' => $userID
            ]);
        } else {
            // return redirect('cart/cartExists');
        }
        return redirect('cart');
    }

    public function toCart2(Request $request) {
        $userID = Auth::user()->id;
        $currCart = DB::table('cart')->where('userID', $userID)->first();
        $currCart_details_product = DB::table('cart_details')->where('productID', $request->productID)->first();

        // if user cart is not created yet
        if ($currCart == null) {
            DB::table('cart')->insert([
                'userID' => $userID
            ]);
        }

        // if product is not added yet
        if ($currCart_details_product == null) {
            DB::table('cart_details')->insert([
                'cartID' => $currCart->cartID,
                'productID' => $request->productID,
                'quantity' => $request->productQuantity,
                'description' => $request->productDescription
            ]);    
        } else {
        // if product is added but it's the same, add quantity only
        if ($currCart_details_product->productID == $request->productID) {
            $addQty = $request->productQuantity;
            $currQty = DB::table('cart_details')->where('productID', $request->productID)->first();
            DB::table('cart_details')->where('productID', $request->productID)->update([
                'quantity' => $addQty + $currQty->quantity
            ]);
        }
        }

        return redirect('cart');
    }
}
