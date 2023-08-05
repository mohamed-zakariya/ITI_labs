<?php

use Illuminate\Support\Facades\Route;
// use app\Controllers\ProductController;
use App\Http\Controllers\ProductController;

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
    return view('summertranning');
});

Route::get("/products/", [ProductController::class, 'index'])->name("products.list");
Route::get("/products/{id}", [ProductController::class, 'show'])->name("products.show");
Route::get("/products/{id}/delete", [ProductController::class, 'delete'])->name("products.delete");



Route::get("/hello/{n}/{na}", function($name,$nam){
    return "<h1 style='color: purple; text-align:center;'> hello {$nam}</h1>
    <h1 style='color: purple; text-align:center;'> hello {$name}</h1>";
});

