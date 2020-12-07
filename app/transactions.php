<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    protected $table = "transactions";
    protected $fillable = ['userID'];

    public function transactionDetail() {
        return $this->hasOne('transactionDetails');
    }

    public function user() {
        return $this->belongsTo('User');
    }
}
