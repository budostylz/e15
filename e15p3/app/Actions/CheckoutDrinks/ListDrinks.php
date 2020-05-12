<?php

namespace App\Actions\CheckoutDrinks;

use App\Bar;
use App\Drinks;


class ListDrinks
{
    public function __construct($bar)
    {

        $sum = 0;
        $barTitle = $bar->bar_title;
        $drinkArr = array();
        
        foreach( $bar as $key => $value ){

          if($key != 'bar_id' && $key != '_token'){
              if(is_numeric($value)){
                $drinkArr[$key] = '$'.$value;
                $sum += (float)($value);
              }

            }
            
          }



          $sumFormat = '$'.number_format($sum, 2, '.', ' ');

          $this->drinkArr = [
            'barTitle' => $barTitle,
            'drinkList' => $drinkArr,
            'totalPrice' => $sumFormat,
          ];


        

      

        

    }
}
