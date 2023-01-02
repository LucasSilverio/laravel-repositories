<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

//Route::resource('/admin/categories', 'Admin\CategoryController');


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function() {

})->name('admin');

Route::prefix('admin')->group(function(){
    Route::any('categories/search', [CategoryController::class, 'search'])->name('categories.search');
    Route::resource('categories', CategoryController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
