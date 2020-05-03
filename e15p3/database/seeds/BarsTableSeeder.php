<?php

use Illuminate\Database\Seeder;
use App\Bar;

class BarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barJSON = file_get_contents(database_path('bars.json'));
        $bars = json_decode($barJSON, true);
        $counter = count($bars);
    
       foreach ($bars as $slug => $barJSON){
    
            $bar = new Bar();
    
            $bar->created_at = Carbon\Carbon::now()->subDays($counter)->toDateTimeString();//differentiate created_at timestamp:subDays($counter)
            $bar->updated_at = Carbon\Carbon::now()->subDays($counter)->toDateTimeString();//differentiate updated_at timestamp:subDays($counter)
            $bar->slug = $slug;
            $bar->title = $barJSON['title'];
            $bar->description = $barJSON['description'];
            $bar->image_path = $barJSON['image_path'];
            $bar->bar_url = $barJSON['bar_url'];

    
            $bar->save();
            $counter--;
    

    
       }
    
        
    
    }
}
