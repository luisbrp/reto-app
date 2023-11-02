<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AntesHome;
use App\Http\Middleware\DespuesHome;
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

Route::get('/principal', function () {
    return view('principal');
})->middleware(AntesHome::class, DespuesHome::Class);

