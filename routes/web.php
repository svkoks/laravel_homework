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
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/categories', AdminCategoryController::class);
});


Route::name('news.')
    ->prefix('news')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/categories', [CategoryController::class, 'allCategories'])->name('categories');
        Route::get('/oneCategory/{id}', [CategoryController::class, 'oneCategory'])->name('oneCategory')->where('id', '[0-9]+');
        Route::get('/{id}', [NewsController::class, 'show'])->name('oneNews')->where('id', '[0-9]+');
    });


/*Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');
*/