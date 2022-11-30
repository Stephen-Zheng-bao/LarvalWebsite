<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ItemController;

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

Route::get('/Admin', function () {
    return view('Admin');
});

Route::get('/adminEdit', function () {
    return view('adminEdit');
});


/*Route::get('/dashboard', function () {
    $items = DB::table('items')->select('id','productName','productCost','productQuantity','productDescription','productRating')->get();
    return view('dashboard')->with('items', $items);
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/dashboard',[ItemController::class,"showProduct"])->name("dashboard");



Route::resource('item',ItemController::class)->only(['index']);





Route::get("/About", [AboutController::class,"about"])->name("About");

Route::get("/Contact", [ContactController::class,"contact"])->name("Contact");

Route::get("/Admin", [AdminController::class,"admin"])->middleware(['auth'])->name("Admin");

Route::get("/Order", [OrderController::class,"order"])->middleware(['auth'])->name("Order");


Route::get("/Basket", [BasketController::class,"basket"])->middleware(['auth'])->name("Basket");
Route::get("basket", [BasketController::class,"basketList"])->middleware(['auth'])->name("basket.list");

Route::get("filter",[ItemController::class,"filter"])->name("filter");
Route::get("search",[ItemController::class,"search"])->name("search");

Route::post('basket', [BasketController::class, 'addToBasket'])->name('basket.store');
Route::post('update-basket', [BasketController::class, 'updateBasket'])->name('basket.update');
Route::post('remove', [BasketController::class, 'removeBasket'])->name('basket.remove');
Route::post('clear', [BasketController::class, 'clearAllBasket'])->name('basket.clear');
Route::post('submit', [BasketController::class, 'submitBasket'])->name('basket.submit');

Route::post('Admin',[AdminController::class,'edit'])->name('edit');
require __DIR__.'/auth.php';
