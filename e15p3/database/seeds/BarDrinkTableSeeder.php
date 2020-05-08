<?php

use Illuminate\Database\Seeder;
use App\Bar;
use App\Drink;

class BarDrinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barDrinksJSON = file_get_contents(database_path('bar_drink.json'));
        $barDrinks = json_decode($barDrinksJSON, true);
        $counter = count($barDrinks['bar_drinks']);
      
        for ($i = 0; $i < $counter; $i++){
        
            $barID = $barDrinks['bar_drinks'][$i]['bar_id'];
            $drinkID = $barDrinks['bar_drinks'][$i]['drink_id'];
            $price = $barDrinks['bar_drinks'][$i]['price'];
            $bar = Bar::where('id', '=', $barID)->first();
            $drink = Drink::where('id', '=', $drinkID)->first();
            $drink->bars()->save($bar, ['price' => $price]);
    
    
       }
    
    
    }
}
