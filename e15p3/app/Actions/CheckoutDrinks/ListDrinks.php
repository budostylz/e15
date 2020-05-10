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
        
        //dump($bar);
        //dump($barTitle);

        foreach( $bar as $key => $value ){

          if($key != 'bar_id' && $key != '_token'){
            //dump($key, $value);
              if(is_numeric($value)){
                //dump($drinkPrice, is_numeric($drinkPrice));
                //dump((float)($drinkPrice));
                $drinkArr[$key] = '$'.$value;
                $sum += (float)($value);
              }

            }
            
          }



          $sumFormat = '$'.number_format($sum, 2, '.', ' ');
          //$drinkArr['totalPrice'] = '$'.$sumFormat;

          //dump($drinkArr);

          $this->drinkArr = [
            'barTitle' => $barTitle,
            'drinkList' => $drinkArr,
            'totalPrice' => $sumFormat,
          ];


        

        //dump('entry GetBarDrinks', $bar->bar_id);

        /*$barID = $bar->bar_id;
        $barModel = Bar::where('id', '=', $barID)->first();
        $barTitle = $barModel->title;
        $drinks = $barModel->drinks()->wherePivot('bar_id', '=', $barID)->get();
        $this->drinkArr = [
                            'barTitle' => $barTitle,
                            'barDrinks' => $drinks->toArray()
                          ];*/

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
