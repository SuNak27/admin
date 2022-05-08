<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassRoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyClassController;
use App\Http\Controllers\VideoController;
use App\Models\Category;


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
    return view('welcome.index', [
        'categories' => Category::all()->take(3),
    ]);
});
Route::get('/myclass', [MyClassController::class, 'index'])->middleware('admin');
Route::get('/category-{id}', [CategoryController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::resource('/register', RegisterController::class)->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Admin
Route::get('/dashboard/class_room/video/{Video:id}', [VideoController::class, 'index'])->middleware('admin');
Route::resource('/dashboard/class_room', ClassRoomController::class);
