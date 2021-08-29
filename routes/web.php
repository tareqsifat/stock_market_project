<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\jsonDBsaveController;


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

Route::get('/', [TableController::class, 'index']);

Route::get('/laravel-json', [jsonDBsaveController::class, 'index']);

Route::get('/store-json', [jsonDBsaveController::class, 'storeJsonData']);


// Route::get('/', function () {
//     return view('welcome');
// });
