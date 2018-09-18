<?php

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
use App\Http\Middleware\Cors;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send_to/{email}', 'Send2EmailController')->middleware(Cors::class);
