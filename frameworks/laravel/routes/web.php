<?php

use App\Http\Controllers\NoteController;
use App\Http\Resources\NoteResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\api\NoteApiController;

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
    return view('home');
});

Route::get('/laravel', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('contacts', ContactController::class);

Route::resource('messages', MessageController::class);

Route::resource('notes', NoteController::class);

require __DIR__.'/auth.php';

Route::prefix('api')->group(function () {
  /*Route::get('/notes', function () {
    return NoteResource::collection(\App\Models\Note::all());
  });*/

  Route::get('/notes/', [NoteApiController::class, 'index']);


});
