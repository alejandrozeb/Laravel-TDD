<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Post;
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

    public function test_validate_title(){
        $response = $this->json('POST'. '/api/posts', [
            'title' => ''
        ]);
        //guardar sin titulo
        $response->assertStatus(422)//la solicitud esta bien hecha pero es imposible realizarla
            ->assertJsonValidationErrores('title');


    }

    public function test_show(){
        $post = Post::factory()->create();

        $response = $this->json('GET', "/api/posts/$post->id"); //id=1 

        $response->assertJsonStructure(['id','title', 'created_at', 'updated_at'])
        ->assertJson(['title' => $post->title])
        ->assertStatus(200);    //ok
    }

    public function test_404_show(){

        $response = $this->json('GET', "/api/posts/1000"); //id=1 
        $response->assertJsonStructure(['id','title', 'created_at', 'updated_at'])
        ->assertJson(['title' => $post->title])
        ->assertStatus(200);    //ok
        $response->assertStatus(200);    //ok
    }

    public function test_update(){
        $post = Post::factory()->create();

        $response = $this->json('PUT', "/api/posts/$post->id",['title' => 'nuevo']);

        $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
            ->assertJson(['title' => 'nuevo'])
            ->assertStatus(200);
        
        $this->assertDatabaseHas('post', ['title' => 'nuevo']);
    }
}