<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Book;

class PageTest extends DuskTestCase
{
    /**
     *
     */
    public function testHomepageForGuest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Welcome to Bookmark');
        });
    }

    /**
     *
     */
    public function testSupportPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/support')
                    ->assertSee(config('mail.supportEmail'));
        });
    }
}
