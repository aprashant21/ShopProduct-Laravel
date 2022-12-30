<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookOrderController;
use App\Http\Controllers\CdOrderController;
use App\Http\Controllers\EsewaController;
use App\Http\Controllers\FonepayController;



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

// indexPage route
Route::get('/', function () {
    return view('index');
});

// about route
Route::get('/about', function () {
    return view('about');
});

// Book controller
Route::get('/booktable',[BookController::class,'index']);
Route::get('/books',[BookController::class,'show']);
Route::get('/book_image/{id}', [BookController::class, 'create']);
Route::post('/book_submit',[BookController::class,'store']);
Route::get('/book_edit/{id}', [BookController::class, 'edit']);
Route::put('/book_update/{id}', [BookController::class, 'update']);
Route::delete('/book_delete/{id}', [BookController::class, 'destroy']);


// Cd Controllers
Route::get('/cdtable',[CdController::class,'index']);
Route::get('/cds',[CdController::class,'show']);
Route::get('/cd_image/{id}', [CdController::class, 'create']);
Route::post('/cd_submit',[CdController::class,'store']);
Route::get('/cd_edit/{id}', [CdController::class, 'edit']);
Route::put('/cd_update/{id}', [CdController::class, 'update']);
Route::delete('/cd_delete/{id}', [CdController::class, 'destroy']);


//Contact Controllers
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact_submit',[ContactController::class,'store']);
Route::get('/contactTable',[ContactController::class,'show']);
Route::get('/contact_delete/{id}', [ContactController::class, 'destroy']);



//authenticate routes
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'show'])->name('admin');
Route::get('/productform', [HomeController::class, 'productForm_Create'])->name('form');

//payment Gateway routes
Route::post('/bookcheckout', [BookOrderController::class, 'checkout'])->name('bookcheckout');
Route::post('/cdcheckout', [CdOrderController::class, 'checkout'])->name('cdcheckout');
Route::any('esewa/success', [EsewaController::class, 'success'])->name('esewa.success');
Route::any('esewa/fail', [EsewaController::class, 'fail'])->name('esewa.fail');
Route::get('payment/response', [EsewaController::class, 'payment_response'])->name('payment.response');
Route::get('fonepay/return', [FonepayController::class, 'onepay_response'])->name('fonepay.return');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
