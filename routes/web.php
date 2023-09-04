<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AnketList;

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
Route::get('/anketler', AnketList::class);

//  Route::get('/fruits', 'App\Http\Controllers\FruitController@index');


