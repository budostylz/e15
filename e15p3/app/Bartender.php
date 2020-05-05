<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bartender extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function drinks()
    {
        return $this->hasMany('App\Drinks');
    }

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
