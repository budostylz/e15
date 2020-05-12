<?php

namespace App\Actions\DrinkInfo;

use App\Bar;
use App\Drinks;


class GetBarDrinks
{
    public function __construct($bar)
    {


        $barID = $bar->bar_id;
        $barModel = Bar::where('id', '=', $barID)->first();
        $barTitle = $barModel->title;
        $drinks = $barModel->drinks()->wherePivot('bar_id', '=', $barID)->get();
        $this->drinkArr = [
                            'barTitle' => $barTitle,
                            'barDrinks' => $drinks->toArray()
                          ];


        

    }
}
