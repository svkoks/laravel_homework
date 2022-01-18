<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/', [IndexController::class, 'index'])->name('main');

Route::view('/about', 'about', ['name' => '"Мир новостей"'])->name('about');

//news routes

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/categories', AdminCategoryController::class);
});

Route::get('/news/categories', [CategoryController::class, 'allCategories'])
->name('news.categories');


Route::get('/news/index', [NewsController::class, 'index'])
->name('news.index');

Route::get('/news/{id}', [NewsController::class, 'show'])
->name('oneNews')
->where('id', '[0-9]+');

/*Route::get('hello/{name}',
fn($name) => "Hello, {$name}");
*/