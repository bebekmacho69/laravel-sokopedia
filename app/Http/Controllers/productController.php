<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\cart;
use App\cartDetails;
use App\transaction;
use App\transactionDetails;
use App\products;

class productController extends Controller
{
    public function viewProduct() {
        $getProducts = products::paginate(6);
        return view('index',[
            'viewProducts' => $getProducts
        ]);
    }

    public function searchProduct(Request $request) {
        $products = products::where([
            ['productName', '!=', null],
            [function ($table) use ($request) {
                if (($term = $request->inputSearch)) {
                    $table->orWhere('productName','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->paginate(6);
        return view('indexSearchResult', [
            'viewProducts' => $products
        ]);
    }

    public function productDetails2($id) {
        $product = products::where('productID', $id)->get();
        return view('productDetails', ['products' => $product]);
    }

    public function historyProduct($id) {
        $product = products::where('productID', $id)->get();
        return view('productDetails_th', ['products' => $product]);
    }

    public function toCart2(Request $request) {
        $userID = Auth::user()->id;
        $currCart = cart::where('userID', $userID)->first();
        $currCart_details_product = cartDetails::where('productID', $request->productID)->first();

        if ($currCart_details_product == null && $currCart != null) {
            $cartDetails = new cartDetails;
            $cartDetails->cartID = $currCart->cartID;
            $cartDetails->productID = $request->productID;
            $cartDetails->quantity = $request->productQuantity;
            $cartDetails->description = $request->userDescription;
            $cartDetails->save();
        } else 
        if ($currCart_details_product->productID == $request->productID && $currCart_details_product != null) {
            $addQty = $request->productQuantity;
            $currQty = cartDetails::where('productID', $request->productID)->first();
            $cartDetails = cartDetails::where('productID', $request->productID)->update([
                'quantity' => $addQty + $currQty->quantity
            ]);
        }

        return redirect('cart');
    }
}
