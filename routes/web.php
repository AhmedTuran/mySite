<?php

use App\Http\Controllers\shop;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('site')->name('site.')->group(function () {
route::get('/home',[shop::class,'home'])->name('home');
route::get('/about',[shop::class,'about'])->name('about');
route::get('/product',[shop::class,'product'])->name('product');

});

