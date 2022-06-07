<?php

use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EcController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuartileController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/home', [HomeController::class, 'show'])->name('home');
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

Route::resource('faq', FaqController::class);

Route::get('quartiles', [QuartileController::class, 'index'])->name('quartiles.index');
Route::get('quartiles/create', [QuartileController::class, 'create'])->name('quartiles.create');
Route::post('quartiles', [QuartileController::class, 'store'])->name('quartiles.store');
Route::get('quartiles/{quartile}', [QuartileController::class, 'show'])->name('quartiles.show');
Route::get('quartiles/{quartile}/edit', [QuartileController::class, 'edit'])->name('quartiles.edit');
Route::put('quartiles/{quartile}', [QuartileController::class, 'update'])->name('quartiles.update');
Route::delete('quartiles/{quartile}', [QuartileController::class, 'destroy'])->name('quartiles.destroy');

Route::get('quartiles/{quartile}/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('quartiles/{quartile}/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('quartiles/{quartile}/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('quartiles/{quartile}/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('quartiles/{quartile}/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('quartiles/{quartile}/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('quartiles/{quartile}/course/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

Route::get('quartiles/{quartile}/courses/{course}/ecs', [EcController::class, 'index'])->name('ecs.index');
Route::get('quartiles/{quartile}/courses/{course}/ecs/create', [EcController::class, 'create'])->name('ecs.create');
Route::post('quartiles/{quartile}/courses/{course}/ecs', [EcController::class, 'store'])->name('ecs.store');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}', [EcController::class, 'show'])->name('ecs.show');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/edit', [EcController::class, 'edit'])->name('ecs.edit');
Route::put('quartiles/{quartile}/courses/{course}/ecs/{ec}', [EcController::class, 'update'])->name('ecs.update');
Route::delete('quartiles/{quartile}/courses/{course}/ecs/{ec}', [EcController::class, 'destroy'])->name('ecs.destroy');

Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams', [ExamController::class, 'index'])->name('exams.index');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/create', [ExamController::class, 'create'])->name('exams.create');
Route::post('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams', [ExamController::class, 'store'])->name('exams.store');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/{exam}', [ExamController::class, 'show'])->name('exams.show');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/{exam}/edit', [ExamController::class, 'edit'])->name('exams.edit');
Route::put('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/{exam}', [ExamController::class, 'update'])->name('exams.update');
Route::delete('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/{exam}', [ExamController::class, 'destroy'])->name('exams.destroy');



Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/userpage', [UserController::class, 'show'])->name('userpage')->middleware('auth');
Route::get('/apichallenges', [APIController::class, 'show'])->name('apichallenges')->middleware('auth');

Route::get('/blog', [BlogController::class, 'show']);
