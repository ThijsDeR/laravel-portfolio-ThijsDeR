<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostsController;

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

Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post],
        'title' => 'posts'
    ]);
});

Route::get('/', [HomeController::class, 'show']);
Route::get('/home', [HomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);


Route::resource('faq', FaqController::class);
// Route::get('/faq', [FaqController::class, 'index']);
// Route::post('/faq', [FaqController::class, 'store']);
// Route::get('/faq/create', [FaqController::class, 'create']);
// Route::get('/faq/{faq_id}', [FaqController::class, 'show']);
// Route::get('/faq/{faq_id}/edit', [FaqController::class, 'edit']);
// Route::put('/faq/{faq_id}', [FaqController::class, 'update']);
// Route::delete('/faq/{faq_id}', [FaqController::class, 'delete']);

Route::get('/blog', [BlogController::class, 'show']);

Route::get('/{title}', function ($title) {
    return view('pagenotfound', [
        'title' => ucwords($title)
    ]);
});
