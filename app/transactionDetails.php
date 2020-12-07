<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transactionDetails extends Model
{
    protected $table = "transactionDetails";
    protected $fillable = ['transactionID','productID','quantity','description'];
}
