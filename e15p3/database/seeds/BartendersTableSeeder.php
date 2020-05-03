<?php

use Illuminate\Database\Seeder;
use App\Bartender;
use App\User;

class BartendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bartendersJSON = file_get_contents(database_path('bartenders.json'));
        $bartenders = json_decode($bartendersJSON, true);
        $counter = count($bartenders['bartenders']);

    
        for($i = 0; $i < $counter; $i++){
    
    
            $json_user_id = $bartenders['bartenders'][$i]['user_id'];
            $user_id = User::where('id', '=', $json_user_id)->pluck('id')->first();
        
    
            $bartender = new Bartender();
            $bartender->created_at = Carbon\Carbon::now()->subDays($i)->toDateTimeString();//differentiate created_at timestamp:subDays($counter)
            $bartender->updated_at = Carbon\Carbon::now()->subDays($i)->toDateTimeString();//differentiate updated_at timestamp:subDays($counter)
            $bartender->user_id = $user_id;
    

            $bartender->save();
    
    
    
    
        }
    
    
    }
}
