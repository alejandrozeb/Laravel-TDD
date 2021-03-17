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
