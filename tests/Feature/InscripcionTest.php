<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * 
* @testdox Modulo  de Inscripcion / (Registro de estudiantes.)
*
*/

class InscripcionTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @testdox Carga del Listado de Estudiantes
     * @return void
     */
    public function Login()
    {
        $response = $this->get('/inscripcion');
        
        $response->assertStatus(302);
    }
}
