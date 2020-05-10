<?php

namespace App\Actions\DrinkInfo;

use App\Bar;
use App\Drinks;


class GetBarDrinks
{
    public function __construct($bar)
    {

        //dump('entry GetBarDrinks', $bar->bar_id);

        $barID = $bar->bar_id;
        $barModel = Bar::where('id', '=', $barID)->first();
        $barTitle = $barModel->title;
        $drinks = $barModel->drinks()->wherePivot('bar_id', '=', $barID)->get();
        $this->drinkArr = [
                            'barTitle' => $barTitle,
                            'barDrinks' => $drinks->toArray()
                          ];

        //dump($this->drinkArr);

        /*dump($bar->title);

        foreach ($drinks as $drink) {
            dump($drink->toArray());
            dump($drink->toArray()['title']);
            dump($drink->toArray()['drink_image']);
            dump((float)$drink->toArray()['pivot']['price']);
        }*/

        

    }
}
