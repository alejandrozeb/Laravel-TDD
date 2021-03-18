<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ('welcome');
});

use App\Models\Post;
Route::get('eloquent', function () {
      //$posts = Post::all();
        /* $posts = Post::where('id','>=', '5')
        ->get(); */
        $posts = Post::where('id','>=', '5')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();//odena de manera descendente
        //var_dump($posts);
    foreach($posts as $post){
        echo "$post->id $post->title <br>";
    }
    //return view('welcome');
});

Route::get('posts', function () {
    $posts = Post::get();
  foreach($posts as $post){
      echo "
      $post->id
      <strong> {$post->user->name} </strong>
      $post->title <br>";
  }
});
use App\Models\User;
Route::get('users', function () {
    $users = User::get();
  foreach($users as $user){
      echo "
      $user->id
      $user->name 
      <strong> Post: {$user->posts->count()} </strong> <br>";    //debe ser la entidad del model
  }
});

Route::get('coleccions', function () {
    $users = User::all();
    //dd($users);
    //dd($users->contains(4));
    //dd($users->except([1,2,3]));    //no trae al 1,2,3
    //dd($users->only(4));    //trae solo el id 4
    //dd($users->find(4));    //busca el id 4
    dd($users->load('posts'));  //trae todos los usuarios con sus relaciones
});

Route::get('serialization', function () {
    $users = User::all();

    //dd($users->toArray('posts'));//devuelve array
    $user = $users->find(1);
    //dd($user);  //devuelve un user
    dd($user->toJson());    //devuelve un Json
});