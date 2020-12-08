<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transactionDetails extends Model
{
    protected $table = "transaction_details";
    protected $fillable = ['transactionID','productID','quantity','description'];

    public function transaction() {
        return $this->belongsTo('transactions');
    }

    public function product() {
        return $this->belongsTo('products');
    }
}
