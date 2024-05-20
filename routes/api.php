<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// panggil project controller sebagai object
use App\Http\Controllers\productcontroller;

// buat route untuk menambahkan data product
Route::post('/product',[productcontroller::class,'store']);