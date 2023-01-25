<?php

use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\UserStoryController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\UmlsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/about', function(){
    return view('about_us');
})->name('about');

Route::get('/index', function(){
    return view('theme.index');
})->name('index');


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('student')->name('home');
    Route::resource('/submit', UserStoryController::class)->middleware('student');
    Route::resource('/coming-soon', ComingSoonController::class)->middleware('student');
    Route::resource('/add-stories', StoryController::class)->middleware('student');
    Route::resource('/add-uml', UmlsController::class)->middleware('student');
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware('student')->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::patch('/update-avatar/{user}', [UserController::class, 'updateAvatar'])->name('user.update');
    Route::patch('/update-info/{user}', [UserController::class, 'updateInformation'])->name('user.update-info');
});

Route::get('/update-password/', [ProfileController::class, 'changePasswordForm'])->name('password.form')->middleware('auth');
Route::post('/updated-password/', [ProfileController::class, 'updatePassword'])->name('password.updates')->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('after-contact', [ContactController::class, 'successEmail'])->name('success-email');
