<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestFormController;
use App\Http\Controllers\ContactController;

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
Route::get('/products', function () {
    return view('products');
});

// Route::get('/start',function(){
//     echo "Hello, i am your first route";
// })->name('start');

// Route::get('/start',function(){
//    return view('start');
// })->name('start');

Route::get('/start/{nom}/{age}',[TestController::class,'index'])
->where(['nom'=>'[a-zA-Z]+','age'=>'[0-9]+'])
->name('start');

Route::get('/info',[TestFormController::class,'create'])->name('create-info');
Route::post('/info',[TestFormController::class,'store'])->name('store-info');

Route::get('/contact',[ContactController::class,'create'])->name('create-contact');
Route::post('/contact',[ContactController::class,'store'])->name('store-contact');

