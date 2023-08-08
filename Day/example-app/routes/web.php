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
    return view('welcome');
});

Route::get("/products/", [ProductController::class, 'index'])->name("products.list");
Route::get("/products/contact", [ProductController::class, 'contact'])->name("products.contact");
Route::get("/products/about", [ProductController::class, 'about'])->name("products.about");
Route::get("/products/add", [ProductController::class, 'add'])->name("products.add");
Route::get("/products/product", [ProductController::class, 'associate'])->name("products.associate");

Route::POST("/products", [ProductController::class, 'store'])->name("products.store");
Route::get("/products/{id}", [ProductController::class, 'show'])->name("products.show");
Route::get("/products/{id}/edit", [ProductController::class, 'edit'])->name("products.edit");
Route::get("/products/{id}/delete", [ProductController::class, 'delete'])->name("products.delete");
Route::PUT("/products/{id}", [ProductController::class, 'update'])->name("products.update");



// you can create routes for the controller operations into one line

use App\Http\Controllers\CategoryController;
Route::resource('categories', CategoryController::class);

//   GET|HEAD        categories .......................................................... categories.index › CategoryController@index  
//   POST            categories .......................................................... categories.store › CategoryController@store  
//   GET|HEAD        categories/create ................................................... categories.create › CategoryController@create  
//   GET|HEAD        categories/{category} ............................................... categories.show › CategoryController@show  
//   PUT|PATCH       categories/{category} ............................................... categories.update › CategoryController@update  
//   DELETE          categories/{category} ............................................... categories.destroy › CategoryController@destroy  
//   GET|HEAD        categories/{category}/edit .......................................... categories.edit › CategoryController@edit  
  

Route::get("/hello/{n}/{na}", function($name,$nam){
    return "<h1 style='color: purple; text-align:center;'> hello {$nam}</h1>
    <h1 style='color: purple; text-align:center;'> hello {$name}</h1>";
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
