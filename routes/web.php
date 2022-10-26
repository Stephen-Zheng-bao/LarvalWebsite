<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/About", [AboutController::class,"about"])->name("About");

Route::get("/Contact", [ContactController::class,"contact"])->name("Contact");

Route::get("/Admin", [ContactController::class,"admin"])->name("Admin");
Route::get("/User", [ContactController::class,"user"])->name("User");
Route::get("/Order", [ContactController::class,"order"])->name("Order");


require __DIR__.'/auth.php';
