<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "cart";
    protected $fillable = ['userID'];

    public function cartDetails() {
        return $this->hasOne('cartDetails');
    }

    public function user() {
        return $this->belongsTo('User');
    }
}
