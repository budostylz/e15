<?php

namespace App\Actions\BarDetails;

use App\Bar;

class GetBarDetails
{
    public function __construct($bar)
    {

        //dump('entry GetBarDetails', $bar->bar);
        $barTitle = $bar->bar;
        $bar = Bar::where('title', '=', $barTitle)->first();

        if($bar){
            $this->barArr = ['barDetails' => $bar->toArray()];
        }

    }
}
