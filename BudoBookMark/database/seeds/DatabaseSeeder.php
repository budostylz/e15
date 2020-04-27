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
        $this->call(AuthorsTableSeeder::class);//an author has many books
        $this->call(BooksTableSeeder::class);//each book belongs to author
        $this->call(UsersTableSeeder::class);
        $this->call(BookUserTableSeeder::class); # Because this seeder is dependent on Books and Users, it should be invoked last

        
    }
}
