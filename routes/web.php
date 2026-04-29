<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
})->name('login.view');

Route::post('/login', function () {})->name('login.do');

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