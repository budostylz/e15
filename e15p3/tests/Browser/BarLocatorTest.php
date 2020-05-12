<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;


class BarLocatorTest extends DuskTestCase
{
    use withFaker;
    /**
     * 
     *
     * 
     */
    public function testBarLocatorValidation()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                    ->visit('/barlocator')
                    ->click('@bar_submit-input')
                    ->assertSee('The bar field is required.');
        });
    }
    /**
     *
     *  
     * 
     */
    public function testBarSelect()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                    ->visit('/barlocator')
                    ->select('@bar-input')
                    ->click('@bar_submit-input')
                    ->assertPathIs('/bardetails')
                    ->assertSee('Click Here To Select Another Bar')
                    ->assertPresent('@bar_image-input')
                    ->assertPresent('@bar_desc-input')
                    ->assertPresent('@get_drinks-input')
                    ->assertPresent('@bar_id-input');

        });
    }
    /**
     *
     *  
     * 
     */
    public function testBarLocatorRedirect()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                    ->visit('/barlocator')
                    ->select('@bar-input')
                    ->click('@bar_submit-input')
                    ->assertPathIs('/bardetails')
                    ->click('@select_bar-input')
                    ->assertPathIs('/barlocator');


        });
    }

    
}
