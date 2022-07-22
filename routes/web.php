<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('first/{id}', function ($id) {
    echo $id;
    return view('first');
});
Route::get('user_home',[User::class, 'index']);
Route::get('user_home/{id}',[User::class, 'index']);