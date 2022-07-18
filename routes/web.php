<?php

use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EcController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FakeAttackController;
use App\Http\Controllers\PortfolioController;
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
Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/home', [HomeController::class, 'show'])->name('home');
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

Route::resource('faq', FaqController::class);

Route::get('quartiles', [QuartileController::class, 'index'])->name('quartiles.index');
Route::get('quartiles/create', [QuartileController::class, 'create'])->name('quartiles.create')->middleware('admin');
Route::post('quartiles', [QuartileController::class, 'store'])->name('quartiles.store')->middleware('admin');
Route::get('quartiles/{quartile}', [QuartileController::class, 'show'])->name('quartiles.show');
Route::get('quartiles/{quartile}/edit', [QuartileController::class, 'edit'])->name('quartiles.edit')->middleware('admin');
Route::put('quartiles/{quartile}', [QuartileController::class, 'update'])->name('quartiles.update')->middleware('admin');
Route::delete('quartiles/{quartile}', [QuartileController::class, 'destroy'])->name('quartiles.destroy')->middleware('admin');

Route::get('quartiles/{quartile}/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('quartiles/{quartile}/courses/create', [CourseController::class, 'create'])->name('courses.create')->middleware('admin');
Route::post('quartiles/{quartile}/courses', [CourseController::class, 'store'])->name('courses.store')->middleware('admin');
Route::get('quartiles/{quartile}/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('quartiles/{quartile}/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit')->middleware('admin');
Route::put('quartiles/{quartile}/courses/{course}', [CourseController::class, 'update'])->name('courses.update')->middleware('admin');
Route::delete('quartiles/{quartile}/course/{course}', [CourseController::class, 'destroy'])->name('courses.destroy')->middleware('admin');

Route::get('quartiles/{quartile}/courses/{course}/ecs', [EcController::class, 'index'])->name('ecs.index');
Route::get('quartiles/{quartile}/courses/{course}/ecs/create', [EcController::class, 'create'])->name('ecs.create')->middleware('admin');
Route::post('quartiles/{quartile}/courses/{course}/ecs', [EcController::class, 'store'])->name('ecs.store')->middleware('admin');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}', [EcController::class, 'show'])->name('ecs.show');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/edit', [EcController::class, 'edit'])->name('ecs.edit')->middleware('admin');
Route::put('quartiles/{quartile}/courses/{course}/ecs/{ec}', [EcController::class, 'update'])->name('ecs.update')->middleware('admin');
Route::delete('quartiles/{quartile}/courses/{course}/ecs/{ec}', [EcController::class, 'destroy'])->name('ecs.destroy')->middleware('admin');

Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams', [ExamController::class, 'index'])->name('exams.index');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/create', [ExamController::class, 'create'])->name('exams.create')->middleware('admin');
Route::post('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams', [ExamController::class, 'store'])->name('exams.store')->middleware('admin');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/{exam}', [ExamController::class, 'show'])->name('exams.show');
Route::get('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/{exam}/edit', [ExamController::class, 'edit'])->name('exams.edit')->middleware('admin');
Route::put('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/{exam}', [ExamController::class, 'update'])->name('exams.update')->middleware('admin');
Route::delete('quartiles/{quartile}/courses/{course}/ecs/{ec}/exams/{exam}', [ExamController::class, 'destroy'])->name('exams.destroy')->middleware('admin');



Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:login')->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/forgot-password', [AuthController::class, 'forgotPasswordView'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');

Route::get('/reset-password/{token}', [AuthController::class, 'resetPasswordView'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

Route::get('/userpage', [UserController::class, 'show'])->name('userpage')->middleware('auth');
Route::get('/apichallenges', [APIController::class, 'show'])->name('apichallenges')->middleware('auth');

Route::get('/blog', [BlogController::class, 'show'])->name('blog');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::get('/404', fn() => abort(404));
Route::get('/500', fn() => abort(500));

Route::get('/attack/{id}', [FakeAttackController::class, 'attacked'])->middleware('admin')->name('fakeAttack');