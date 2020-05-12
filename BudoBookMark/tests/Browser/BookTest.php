<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Book;
use App\User;

class BookTest extends DuskTestCase
{
    use withFaker;
    use DatabaseMigrations;

    /**
     *
     */
    public function testLoadingBookWithAuthor()
    {
        $this->browse(function (Browser $browser) {
            $book = factory(Book::class)->create();
            
            $user = factory(User::class)->create();
            
            $browser->loginAs($user->id)
                    ->visit('/books/' . $book->slug)
                    ->assertSee($book->title)
                    ->assertPresent('@author-info');
        });
    }

    /**
     *
     */
    public function testLoadingBookWithNoAuthor()
    {
        $this->browse(function (Browser $browser) {
            $book = factory(Book::class)->states('withUser', 'withoutAuthor')->create();
            
            $user = $book->users()->first();
            
            $browser->loginAs($user->id)
                    ->visit('/books/' . $book->slug)
                    ->assertMissing('@author-info');
        });
    }

    /**
     *
     */
    public function testAddingBook()
    {
        $this->browse(function (Browser $browser) {
            
            # Let our book factory generate a book for us
            $book = factory(Book::class)->states('withoutAuthor')->create();
            
            # We'll grab the data from this book to fill in the form
            $data = $book->toArray();

            # And delete it so it won't conflict with what we're about to add
            $book->delete();

            # Create a user to create a new book as
            $user = factory(User::class)->create();
            
            $browser->loginAs($user->id)
                    ->visit('/books/create')
                    ->value('@slug-input', $data['slug'])
                    ->value('@title-input', $data['title'])
                    ->value('@published-year-input', $data['published_year'])
                    ->value('@cover-url-input', $data['cover_url'])
                    ->value('@info-url-input', $data['info_url'])
                    ->value('@purchase-url-input', $data['purchase_url'])
                    ->value('@description-input', $data['description'])
                    ->click('@add-button')
                    ->assertPathIs('/books/'.$data['slug'])
                    ->assertSeeIn('@book-title-heading', $book['title']);
        });
    }

    /**
     *
     */
    public function testAddingBookWithExistingSlug()
    {
        $this->browse(function (Browser $browser) {
            
            # Generate an existing book
            $book = factory(Book::class)->create();
            
            # Create a user to create a new book as
            $user = factory(User::class)->create();
            
            $browser->loginAs($user->id)
                    ->visit('/books/create')
                    ->value('@slug-input', $book->slug) # Existing Slug
                    ->value('@title-input', $book->title)
                    ->value('@published-year-input', $book->published_year)
                    ->value('@cover-url-input', $book->cover_url)
                    ->value('@info-url-input', $book->info_url)
                    ->value('@purchase-url-input', $book->purchase_url)
                    ->value('@description-input', $book->description)
                    ->click('@add-button')
                    ->assertPresent('@error-field-slug');
        });
    }
}
