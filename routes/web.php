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

Route::get('/', fn() => "Welcome");

Route::get('/welcome', fn() => view('welcome'));

Route::get('/contact', fn() => view('contact'));

Route::get('/test', fn() => view('test'));

Route::get('/query', function() {
    // request('name') reads query param "name"
    return view('query', [
        'name' => request('name'),
    ]);
});

// Route params/wildcards wrapped in {} and passed into callback
// Route::get('/posts/{post}', fn($post) =>
//     view('post', [
//         'post' => $post
//     ])
// );

// abort(404, 'Sorry, post not found'); if you want to route to a 404

Route::get('/posts/{post}', [App\Http\Controllers\PostsController::class, 'show']);
