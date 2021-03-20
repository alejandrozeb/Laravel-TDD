<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Italo Morales F',
            'email' => 'i@admin.com',
            'password'=> bcrypt('123456') 
        ]);
        //no vamos a saber el email si usamos el factory de usuarios
        //factory(\App\Models\Post::class, 24)->create();
        \App\Models\Post::factory(24)->create();
    }
}
