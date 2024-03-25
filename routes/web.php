<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\SepetController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Livewire\Counter;
use App\Http\Controllers\SearchController;

Route::get('/', SepetController::class);
 
// Route::get('/counter', Counter::class);

