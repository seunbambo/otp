<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function after_login_user_cannot_access_home_page_until_verified()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $this->get('/home')->assertRedirect('/');
    }
}
