<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;


class  GetDrinksTest extends DuskTestCase
{
    use withFaker;
    /**
     * 
     *
     * 
     */
    public function testGetDrinksDirect()
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
                    ->assertPresent('@drink_list-input');

        });
    }
    /**
     *
     *  
     * 
     */
    public function testGetDrinksSelect()
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
                    ->assertMissing('No Drinks Here')
                    ->assertSee('Place Order');
            });
    }
    /**
     *
     * 
     * 
     */
    public function testGetDrinksNoSelect()
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
                    ->click('@order_drink-input')
                    ->assertPathIs('/checkoutdrinks')
                    ->assertSee('No Drinks Here')
                    ->assertMissing('Place Order');

            });
    }

    /**
     *
     * 
     * 
     */
    public function testOrderDrinkDirect()
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
                    ->assertSee('Your Order is Received. View Order Status Above to Check Status.');

            });
    }
 /**
     *
     * 
     * 
     */
    public function testReviewOrder()
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
                    ->click('@status_link-input')
                    ->assertSee('No Orders Here');

            });
    }

    

    

    
}
