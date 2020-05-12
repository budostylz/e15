<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class AuthTest extends DuskTestCase
{
    use withFaker;
    
    /**
     * 
     */
    public function testRegistration()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create();

            $browser->visit('/')
                    ->click('@app-register')
                    ->assertVisible('@register-heading')
                    ->type('@last_name-input', $user->last_name)
                    ->type('@first_name-input', $user->first_name)
                    ->type('@middle_initial-input', $user->middle_initial)
                    ->type('@email-app-input', $this->faker->safeEmail())
                    ->type('@password-app-input', $user->password)
                    ->type('@password-app-confirm-input', $user->password)
                    ->type('@user_name-input', $user->user_name)
                    ->select('@entity_type-input')
                    ->click('@register-app-button')
                    ->assertSee('Welcome Back '.$user->first_name);
        });
    }
    /**
     * 
     */
    public function testSignIn()
    {
        $this->browse(function (Browser $browser) {

            $user = factory(User::class)->create();
            //faker acting funky here

            $browser->logout()
                    ->visit('/login')
                    ->type('@user_name-input', 'shaun1')
                    ->type('@password-app-input', 'helloworld')
                    ->click('@signin-input')
                    ->assertSee('Welcome Back Shaun');

        });
    }

    /**
     *
     */
    public function testSignInValidation()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(User::class)->create();

            $browser->logout()
                    ->visit('/login')
                    ->click('@signin-input')
                    ->assertSee('The user name field is required')
                    ->assertSee('The password field is required.');
        });
    }

    /**
     * 
     */
    public function testRegistrationValidation()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(User::class)->create();

            $browser->logout()
                    ->visit('/register')
                    ->click('@register-app-button')
                    ->assertSee('The last name field is required.')
                    ->assertSee('The first name field is required.')
                    ->assertSee('The email field is required.')
                    ->assertSee('The password field is required.')
                    ->assertSee('The user name field is required.')
                    ->assertSee('The entity type field is required.');
        });
    }




}
