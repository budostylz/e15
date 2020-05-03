<?php

use Illuminate\Database\Seeder;
use App\Drink;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drinkJSON = file_get_contents(database_path('drinks.json'));
        $drinks = json_decode($drinkJSON, true);
        $counter = count($drinks);
        
    
        foreach ($drinks as $slug => $drinkJSON){
        
            $drink = new Drink();
    
            $drink->created_at = Carbon\Carbon::now()->subDays($counter)->toDateTimeString();//differentiate created_at timestamp:subDays($counter)
            $drink->updated_at = Carbon\Carbon::now()->subDays($counter)->toDateTimeString();//differentiate updated_at timestamp:subDays($counter)
            $drink->slug = $slug;
            $drink->title = $drinkJSON['title'];
            $drink->drink_image = $drinkJSON['drink_image'];
            $drink->ingredient = $drinkJSON['ingredient'];
    
    
            $drink->save();
            $counter--;
    
    
    
       }
    
    }
}
