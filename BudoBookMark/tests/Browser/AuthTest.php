<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;
    use withFaker;

    /**
     *
     */
    public function testAuthorizationRequired()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/books')
                    ->assertPresent('@login-heading')
                    ->visit('/list')
                    ->assertPresent('@login-heading');
        });
    }

    /**
     *
     */
    public function testSuccessfulRegistration()
    {
        $this->browse(function (Browser $browser) {
            $name = $this->faker->name;

            $browser->visit('/')
                    ->click('@register-link')
                    ->assertVisible('@register-heading')
                    ->type('@name-input', $name)
                    ->type('@email-input', $this->faker->safeEmail())
                    ->type('@password-input', 'helloworld')
                    ->type('@password-confirm-input', 'helloworld')
                    ->click('@register-button')
                    ->assertSee($name);
        });
    }

    /**
     *
     */
    public function testRegisteringWithExistingEmail()
    {
        $this->browse(function (Browser $browser) {

            // Create a user so we can try registering with their same info
            $user = factory(User::class)->create();

            $browser->logout()
                    ->visit('/register')
                    ->type('name', $user->name)
                    ->type('email', $user->email)
                    ->type('password', 'helloworld')
                    ->type('password_confirmation', 'helloworld')
                    ->click('@register-button')
                    ->assertPresent('@error-field-email')
                    ->assertSee('The email has already been taken.');
        });
    }

    /**
     *
     */
    public function testSuccesfulLogin()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(User::class)->create();

            $browser->logout()
                    ->visit('/login')
                    ->type('@email-input', $user->email)
                    ->type('@password-input', 'helloworld')
                    ->click('@login-button')
                    ->assertSee(strtoupper('logout '. $user->name));
        });
    }

    /**
     *
     */
    public function testLoginValidation()
    {
        $this->browse(function (Browser $browser) {
            $user = factory(User::class)->create();

            $browser->logout()
                    ->visit('/login')
                    ->type('@email-input', $user->email)
                    ->type('@password-input', 'this-is-the-wrong-password')
                    ->click('@login-button')
                    ->assertSee('These credentials do not match our records.');
        });
    }
}
