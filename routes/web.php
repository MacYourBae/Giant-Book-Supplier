<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'bookindex']);
Route::get('/book/{id}', [BookController::class, 'bookdetail'])->name('book.bookdetail');
Route::get('/category/{id}', [CategoryController::class, 'categoryindex'])->name('category.category');
Route::get('/publisher', [PublisherController::class, 'publisherindex'])->name('publisher.publisher');
Route::get('/publisher/{id}', [PublisherController::class, 'publisherdetail'])->name('publisher.publisherdetail');
Route::get('/contact', [BookController::class, 'contactindex'])->name('contact.contact');