<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    /*
    Post::create([
        'title'=>'created title',
        'content'=>'created content',
    ]);
    */

    /*
    $post = new Post();
    $post->title = "test title";
    $post->content = "test content";
    $post->save();
    */

    /*
    $post = Post::find(1);
    echo '標題: '.$post->title.'<br>';
    echo '內容: '.$post->content.'<br>';
    dd($post);
    */

    /*
    $posts = Post::all();

    // 每次迴圈依序取出一篇貼文
    foreach($posts as $post){
        echo '編號: '.$post->id.'<br>';
        echo '標題: '.$post->title.'<br>';
        echo '內容: '.$post->content.'<br>';
        echo '張貼時間: '.$post->created_at.'<br>';
    }
    dd($post);
    */

    $posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
    dd($posts);

    
});
