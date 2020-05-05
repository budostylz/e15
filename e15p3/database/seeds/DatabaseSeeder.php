<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BarsTableSeeder::class);
        $this->call(DrinksTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BartendersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(BarDrinkTableSeeder::class);


    }
}
