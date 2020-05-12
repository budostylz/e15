<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Author;
use App\User;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    $title = $faker->words(rand(3, 6), true); # green park balloon
    $slug = Str::slug($title, '-'); # green-park-balloon
    return [
        'slug' => $slug,
        'title' => $title,
        'published_year' => $faker->year,
        'cover_url' => 'https://hes-bookmark.s3.amazonaws.com/cover-placeholder.png',
        'info_url' => 'https://en.wikipedia.org/wiki/' . $slug,
        'purchase_url' => 'https://www.barnesandnoble.com/' . $slug,
        'description' => $faker->paragraphs(2, true),

        // one-to-many 
        'author_id' => function () {
            return factory(Author::class)->create()->id;
        },
    ];
});

# Factory states
# https://laravel.com/docs/database-testing#factory-states
# allow you to define “discrete modifications” of your model factories
# Examples:

# Add a special state to create books without an author
$factory->state(Book::class, 'withoutAuthor', [
    'author_id' => null,
]);

# Add a special state to create books with 1 user
$factory->state(Book::class, 'withUser', []);
$factory->afterCreatingState(Book::class, 'withUser', function ($book) {
    $user = factory(User::class)->create();
    $book->users()->sync([$user->id]);
});

# Add a special state to create books with multiple user
$factory->state(Book::class, 'withUsers', []);
$factory->afterCreatingState(Book::class, 'withUsers', function ($book) {
    for ($i = 0; $i < 5; $i++) {
        $user = factory(User::class)->create();
        $userIds[] = $user->id;
    }

    $book->users()->sync($userIds);
});
