<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\cart;
use App\cartDetails;
use App\transactions;
use App\transactionDetails;

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

    public function cart() {
        $userID = Auth::user()->id;
        $cart = cart::where('userID',$userID)->first();
        $product = DB::table('cart_details')->where('cartID', $cart->cartID)
            ->join('products', 'cart_details.productID', '=', 'products.productID')
            ->select('cart_details.description','cart_details.productID', 'cart_details.cartID','products.productImage','products.productName','products.productPrice','products.productDescription','cart_details.quantity')
            ->get();
        return view('cart',[
            'product' => $product
        ]);
    }

    public function cartDelete($id) {
        $table = DB::table('cart_details')->where('productID',$id)->delete();
        return redirect('cart');
    }

    public function cartEditPage() {
        $cart = DB::table('cart_details')->join('products', 'cart_details.productID', '=', 'products.productID')
            ->select('products.productImage', 'products.productName', 'cart_details.quantity', 'cart_details.description')
            ->get();
        return view ('cartEdit', [
            'table' => $cart
        ]);
    }

    public function cartEdit($id) {
        $item = cartDetails::where('productID', $id)->get();
        $cart = DB::table('cart_details')
            ->join('products', 'cart_details.productID', '=', 'products.productID')
            ->select('cart_details.productID','products.productImage', 'products.productName', 'cart_details.quantity', 'cart_details.description')
            ->where('cart_details.productID','=', $id)
            ->get();

        return view('cartEdit', [
            'table' => $cart,
            'item' => $item
        ]);
    }

    public function cartUpdate(Request $request) {
        $cartDetails = cartDetails::where('productID',$request->productID)->update([
            'quantity' => $request->userQuantity,
            'description' => $request->userDescription
        ]);
        return redirect('cart');
    }

    public function cartClear() {
        $userID = Auth::user()->id;
        $cart = cart::where('userID', $userID)->first();
        $cartDetails = cartDetails::where('cartID', $cart->cartID)->delete();
        return redirect('cart');
    }

    public function checkout() {
        $userID = Auth::user()->id;

        $userCart = cart::where('userID', $userID)->first();
        $userCartDetails = cartDetails::where('cartID',$userCart->cartID)->get();

        $transactions = new transactions;
        $transactions->userID = $userID;
        $transactions->save();
        $getTransaction = transactions::where('userID',$userID)->latest()->first();

        $userTransactionDetails = new transactionDetails;
        $cartDetails = cartDetails::where('cartID',$userCart->cartID)->select('productID', 'quantity', 'description')->get();
        foreach($cartDetails as $cD){
            $cartDetails = cartDetails::where('cartID',$userCart->cartID)->select('productID', 'quantity', 'description')->first();
            $newTransactionDetails = new transactionDetails;
            $newTransactionDetails->transactionID = $getTransaction->transactionID;
            $newTransactionDetails->productID = $cartDetails->productID;
            $newTransactionDetails->quantity = $cartDetails->quantity;
            $newTransactionDetails->description = $cartDetails->description;
            $newTransactionDetails->save();
        }
        $deleteCartDetails = cartDetails::where('cartID',$userCart->cartID)->delete();
        return redirect('index');
        // create history(transactions) based on userID
        // create historyDetails(transactionDetails) based on historyID 
        // delete current user session cartDetails
        
        // historyDetails contains productID, quantity and description
    }
}
