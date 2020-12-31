<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[PostController::class , "index"])->name("pg.index");


Route::post('/gracias',[FormularioController::class,"mandarSolicitud"])->name("contactanos");



Route::get('/test', function () {
    return view("dashboard");
});


Route::get('/sendE',[MailController::class , "sendEmail"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
