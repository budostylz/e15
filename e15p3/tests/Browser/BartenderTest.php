<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;


class BartenderTest extends DuskTestCase
{
    use withFaker;
    /**
     * 
     *
     * 
     */
    public function testCustomerList()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                    ->visit('/barlocator')
                    ->select('@bar-input')
                    ->click('@bar_submit-input')
                    ->assertPathIs('/bardetails')
                    ->click('@get_drinks-input')
                    ->assertPathIs('/drinkinfo')
                    ->click('@check_drink-input')
                    ->click('@order_drink-input')
                    ->assertPathIs('/checkoutdrinks')
                    ->click('@place_order-input')
                    ->assertPathIs('/barlocator')
                    ->click('@review_link-input')
                    ->assertSee('Click Customer to View Pending Order');

            });
    }

    /**
     * 
     *
     * 
     */

    public function testViewCustomerOrder()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                    ->visit('/barlocator')
                    ->select('@bar-input')
                    ->click('@bar_submit-input')
                    ->assertPathIs('/bardetails')
                    ->click('@get_drinks-input')
                    ->assertPathIs('/drinkinfo')
                    ->click('@check_drink-input')
                    ->click('@order_drink-input')
                    ->assertPathIs('/checkoutdrinks')
                    ->click('@place_order-input')
                    ->assertPathIs('/barlocator')
                    ->click('@review_link-input')
                    ->click('@customer_button-input')
                    ->assertSee('Click Here to Return to Customer List')
                    ->assertPresent('@customer_order-input');

            });
    }

     /**
     * 
     *@group focus
     * 
     */
    public function testProcessOrder()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                     ->visit('/barlocator')
                    ->select('@bar-input')
                    ->click('@bar_submit-input')
                    ->assertPathIs('/bardetails')
                    ->click('@get_drinks-input')
                    ->assertPathIs('/drinkinfo')
                    ->click('@check_drink-input')
                    ->click('@order_drink-input')
                    ->assertPathIs('/checkoutdrinks')
                    ->click('@place_order-input')
                    ->assertPathIs('/barlocator')
                    ->click('@review_link-input')
                    ->click('@customer_button-input')
                    ->click('@process_order-input')
                    ->assertSee('Your Customer Order Have Been Processed.');

            });
    }

    


    

    
}
