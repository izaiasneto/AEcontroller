
<?php

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

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductsController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('update-product', [EventController::class, 'update'])->middleware('auth');
Route::delete('delete-product', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard',[EventController::class, 'dashboard'])->middleware('auth');
Route::get('products/search', [EventController::class, 'search'])->middleware('auth');
Route::get('products', [EventController::class, 'products'])->middleware('auth');

//export excel
Route::get('products/export/', [ProductsController::class, 'export'])->name('excel')->middleware('auth');;

