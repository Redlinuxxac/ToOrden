<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * 
* @testdox Modulo  de login / (Autenitifcacion y resgistro.)
*
*/

class LoguinTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     * @test
     * @testdox Carga la pantalla de Entrada (Login)
     * @return void
     */
    public function login_displays_the_login_form()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }
    /** @test atutentificcion y redirecionamientos */
    public function login_authenticates_and_redirects_user()
    {
        $user = factory(User::class)->create();
        dd($user);
        // $response = $this->post(route('login'), [
        //     'school_id' => $user->school_id,
        //     'email' => $user->email,
        //     'password' => 'password'
        // ]);

        // $response->assertRedirect(route('home'));
        // $this->assertAuthenticatedAs($user);
    }
    /**
     * A basic test example.
     *
     * @test
     * @testdox Carga El cerrado de secion (logout)
     * @return void
     */
    public function Logout()
    {
        $response = $this->post('/logout');

        $response->assertStatus(302);
    }
}
