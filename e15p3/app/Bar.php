<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bar extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    
    public function drinks()
    {
        return $this-> belongsToMany('App\Drink')
            ->withTimestamps();
    }
}
