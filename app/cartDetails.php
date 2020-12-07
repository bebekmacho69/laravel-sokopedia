<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartDetails extends Model
{
    protected $table = "cart_details";
    protected $fillable = ['cartID','productID','quantity','description'];

    public function cart() {
        return $this->belongsTo('cart');
    }

    public function products() {
        return $this->belongsTo('products');
    }
}
