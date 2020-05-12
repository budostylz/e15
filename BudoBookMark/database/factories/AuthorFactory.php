<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;

    return [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'birth_year' => $faker->numberBetween(1950, 2020),
        'bio_url' => 'https://en.wikipedia.org/wiki/' . $firstName . '-' . $lastName,
    ];
});
