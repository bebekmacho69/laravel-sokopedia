<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartDetails extends Model
{
    protected $table = "cart_details";
    protected $fillable = ['cartID','productID','quantity','description'];
}
