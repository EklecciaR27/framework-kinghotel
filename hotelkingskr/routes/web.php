<?php

use Illuminate\Support\Facades\Route;
use App\Models\Reservasi;
use App\Models\Guest;

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
})->name('welcome');

Route::get('/data/reservasi', function () {
    return view('datahotel.reservasi', [
    "reservasi" => Reservasi::all()
    ]);
})->name('datahotel.reservasi');

Route::get('/data/guest', function () {
    return view('datahotel.guest', [
    "guest" => Guest::all()
    ]);
})->name('datahotel.guest');


