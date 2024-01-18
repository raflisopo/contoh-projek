<?php

use App\Http\Controllers\ItemController;
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

Route::get('/app', function () {
    return view('layout.app');
});
Route::get('/jasa', function () {
    return view('layout.jasa');
});
Route::get('/item/create', [ItemController::class,'create']);
Route::get('/', function () {
    return view('login');
});
//index
// Route::get('/item', [ItemController::class,'index']);
Route::get('/item', [ItemController::class,'index']);
Route::post('/{item}/edit', [ItemController::class,'edit']);

//Route::get('/item', [ItemController::class,'index']);
Route::post('/barang/update/{item}', [ItemController::class,'update']);
// Route::dalete('/item/{item}', [ItemController::class,'destroy']);




