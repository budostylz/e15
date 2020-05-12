<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Bartenders
        $user = User::updateOrCreate(
            [
                'user_name' => 'shaun1',
                'last_name' => 'Lewis',
                'first_name' => 'Shaun',
                'middle_initial' => 'C',
                'entity_type' => 'Bartender',
                'email' => 'lewis.shaun1@outlook.com', 
                
            ],
            ['password' => Hash::make('helloworld')
        ]);

        $user = User::updateOrCreate(
            [
                'user_name' => 'fernando1',
                'last_name' => 'Hernandez',
                'first_name' => 'Fernando',
                'middle_initial' => null,
                'entity_type' => 'Bartender',
                'email' => 'fernando1@gmail.com', 
                
            ],
            ['password' => Hash::make('helloworld')
        ]);

        //Customers
        $user = User::updateOrCreate(
            [
                'user_name' => 'jill1',
                'last_name' => 'Harvard',
                'first_name' => 'Jill',
                'middle_initial' => null,
                'entity_type' => 'Customer',
                'email' => 'jill@harvard.edu', 
                
            ],
            ['password' => Hash::make('helloworld')
        ]);

        $user = User::updateOrCreate(
            [
                'user_name' => 'jamal1',
                'last_name' => 'Harvard',
                'first_name' => 'Jamal',
                'middle_initial' => null,
                'entity_type' => 'Customer',
                'email' => 'jamal@harvard.edu', 
                
            ],
            ['password' => Hash::make('helloworld')
        ]);


        


    }
}
