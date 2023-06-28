<?php

use Illuminate\Support\Facades\Route;

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

// Praktikum 8
Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello/{nama}/{alamat}', function ($nama,$alamat) {
    return "<h2>  Hello $nama dari $alamat </h2>";
});

Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ['id'=>$id]);
});


// Praktikum 9
use App\Http\Controllers\UserController;

Route::get('/user', 
        [UserController::class, 'index']);

Route::get('/user/daftar', 
        [UserController::class, 'daftar']);

Route::post('/user/store', 
        [UserController::class, 'store']) -> name('user/store');


// Route tugas 8 
Route::get('/tugas8', function () {
    return view('tugas8');
});


// Praktikum 10
use App\Http\Controllers\TokoController;

Route::prefix('toko')->group(function(){

    Route::get('/', 
        [TokoController::class, 'index']);

    Route::get('/detail', 
        [TokoController::class, 'detail']);
    
     Route::get('/about', 
        [TokoController::class, 'about']);



Route::group(['middleware' => ['auth']], function(){
    // Praktikum 11
    Route::get('/admin', 
    [TokoController::class, 'admin'])->name('produk.admin');

    // Praktikum 12 (CRUD)
    Route::get('/create', 
        [TokoController::class, 'create'])->name('produk.create');

    Route::post('/', 
        [TokoController::class, 'store'])->name('produk.store');

    Route::get('/{product}/edit', 
        [TokoController::class, 'edit'])->name('produk.edit');

    Route::put('/{product}', 
        [TokoController::class, 'update'])->name('produk.update');

    Route::delete('/{product}', 
        [TokoController::class, 'destroy'])->name('produk.destroy');

    
});


});

// Route Tugas 9
use App\Http\Controllers\FormController;

Route::get('/formulir', 
        [FormController::class, 'index']);

Route::post('/formulir', 
        [FormController::class, 'formulir']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
