<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bar extends Model
{

    public function drinks()
    {
        return $this-> belongsToMany('App\Drink')
            ->withTimestamps()
            ->withPivot('price');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    
}
