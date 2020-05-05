<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function drinks()
    {
        return $this->hasMany('App\Drinks');
    }

    public function bartender()
    {
        return $this->belongsTo('App\Bartender');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
