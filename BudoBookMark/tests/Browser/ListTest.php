<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Book;
use App\User;

class ListTest extends DuskTestCase
{
    use withFaker;
    use DatabaseMigrations;


    /**
     *
     */
    public function testListWithBooks()
    {
        $this->browse(function (Browser $browser) {
            $book = factory(Book::class)->state('withUser')->create();
            $user = $book->users()->first();
            
            $browser->loginAs($user->id)
                    ->visit('/list')
                    ->assertSee($book->title);
        });
    }

    /**
     *
     */
    public function testEmptyList()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(User::class)->create();
            
            $browser->loginAs($user->id)
                    ->visit('/list')
                    ->assertPresent('@no-books-message');
        });
    }

    /**
     * @group focus
     */
    public function testAddingToList()
    {
        $this->browse(function (Browser $browser) {
            $book = factory(Book::class)->create();

            $user = factory(User::class)->create();

            $notes = $this->faker->sentences(2, true);

            $browser->loginAs($user->id)
                    ->visit('/books/' . $book->slug)
                    ->click('@add-to-list-button')
                    ->value('@notes-input', $notes)
                    ->click('@save-button')
                    ->assertPathIs('/list')
                    ->assertSee($book->title)
                    ->assertSee($notes);
        });
    }
}
