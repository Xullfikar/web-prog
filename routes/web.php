<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login.view');

Route::post('/login', [AuthController::class, 'login'])->name('login.do');

Route::get('/register', function () {
    return view('register');
})->name('register.view');

Route::prefix('product')->name('product.')->group(function (){
    Route::get('/list', function(){
        return "<h1>Product List</h1>";
    })->name('list');

    Route::get("/detail/{product_id}", function($product_id){
        return "<h1>Product Id $product_id Detail</h1>";
    })->name('detail');
});

Route::get('about', [AboutController::class, 'index']);

Route::redirect('kontak-kami', 'about');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.detail');