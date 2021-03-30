<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store()//referencia a store de postController
    {
        //$this->withoutExceptionHandling();
        $response = $this->json('POST', '/api/posts',[
            'title' => 'El post de prueba' 
        ]); //accedemos a la ruta enviando un datos

        $response->assertJsonStructure(['id','title', 'created_at', 'updated_at'])
        ->assertJson(['title' => 'El post de prueba'])
        ->assertStatus(201); //ok, y creado un recurso
        //afirma o comprueba que devuelve un valor de ese tipo
        
       $this->assertDatabaseHas('posts', ['title' => 'El post de prueba']);    
        //confirmamos si esta en la bd
    }
}
