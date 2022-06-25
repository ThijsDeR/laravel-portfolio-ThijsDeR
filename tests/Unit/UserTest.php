<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_login_works()
    {
        User::create(['username' => 'TeaEyes', 'password' => Hash::make('password'), 'email' => 'thijsderechter@gmail.com']);
        $goodResponse = $this->post('/login', ['username' => 'TeaEyes', 'password' => 'password']);

        $this->assertTrue(Auth::check());

        $this->get('/logout');
        $this->assertFalse(Auth::check());

        $badResponse = $this->post('/login', ['username' => 'TeaEyes', 'password' => 'test']);

        $this->assertFalse(Auth::check());
    }

    public function test_if_register_works()
    {
        $this->post('/register', ['username' => 'TeaEyes', 'password' => 'password1234', 'email' => 'thijsderechter@gmail.com']);

        $this->assertTrue(Auth::check());

        $this->get('/logout');
        $this->assertFalse(Auth::check());

        //not long enough
        $this->post('/register', ['username' => 'TeaEyes', 'password' => 'password', 'email' => 'thijsderechter@gmail.com']);

        $this->assertFalse(Auth::check());
    }
}
