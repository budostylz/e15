<?php

use Illuminate\Database\Seeder;
use App\Customer;
use App\User;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customersJSON = file_get_contents(database_path('customers.json'));
        $customers = json_decode($customersJSON, true);
        $counter = count($customers['customers']);
    
        for($i = 0; $i < $counter; $i++){
    
    
            $json_user_id = $customers['customers'][$i]['user_id'];
            $user_id = User::where('id', '=', $json_user_id)->pluck('id')->first();
    
    
    
            $customer = new Customer();
            $customer->created_at = Carbon\Carbon::now()->subDays($i)->toDateTimeString();//differentiate created_at timestamp:subDays($counter)
            $customer->updated_at = Carbon\Carbon::now()->subDays($i)->toDateTimeString();//differentiate updated_at timestamp:subDays($counter)
            $customer->user_id = $user_id;
    
            $customer->save();
    
    
    
    
    
        }
        

    }
}
