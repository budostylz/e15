<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    public function bars()
    {
        return $this-> belongsToMany('App\Bar')
            ->withTimestamps()
            ->withPivot('price');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function bartender()
    {
        return $this->belongsTo('App\Bartender');
    }
}
