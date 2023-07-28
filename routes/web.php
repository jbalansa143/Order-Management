<?php

use Illuminate\Support\Facades\Route;

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
// View Dashboard
Route::get('/', 'App\Http\Controllers\DashboardController@index');


// Dashboard Controller
// Route::get('/', 'App\Http\Controllers\SummaryController@index')->name('dashboard');

//Menu Controllers
Route::prefix('menu')->group(function() {
    Route::get('/', 'App\Http\Controllers\MenuController@index')->name('menu.index');
    Route::get('create', 'App\Http\Controllers\MenuController@create')->name('menu.create');
    Route::post('store', 'App\Http\Controllers\MenuController@store')->name('menu.store');
    Route::get('edit/{menu}', 'App\Http\Controllers\MenuController@edit')->name('menu.edit');
    Route::put('update/{menu}', 'App\Http\Controllers\MenuController@update')->name('menu.update');
    Route::get('destroy/{menu}', 'App\Http\Controllers\MenuController@destroy')->name('menu.destroy');
});
// Menu Category Controller
Route::prefix('category')->group(function() {
    Route::get('/', 'App\Http\Controllers\CategoryController@index')->name('category.index');
    Route::get('create', 'App\Http\Controllers\CategoryController@create')->name('category.create');
    Route::post('store', 'App\Http\Controllers\CategoryController@store')->name('category.store');
    Route::get('destroy/{category}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
});


// Table Controller
Route::prefix('table')->group(function () {
    Route::get('/', 'App\Http\Controllers\TableController@index')->name('table.index');
    Route::get('create', 'App\Http\Controllers\TableController@create')->name('table.create');
    Route::post('store', 'App\Http\Controllers\TableController@store')->name('table.store');
    Route::get('edit/{table}', 'App\Http\Controllers\TableController@edit')->name('table.edit');
    Route::put('update/{table}', 'App\Http\Controllers\TableController@update')->name('table.update');
    Route::get('destroy/{table}', 'App\Http\Controllers\TableController@destroy')->name('table.destroy');
});

// Stocks Controller
Route::prefix('stock')->group(function () {
    Route::get('/', 'App\Http\Controllers\StockController@index')->name('stocks.index');
    Route::get('create', 'App\Http\Controllers\StockController@create')->name('stocks.create');
    Route::post('create', 'App\Http\Controllers\StockController@store')->name('stocks.store');
    Route::get('edit/{stock}', 'App\Http\Controllers\StockController@edit')->name('stocks.edit');
    Route::put('update/{stock}', 'App\Http\Controllers\StockController@update')->name('stocks.update');
    Route::get('destroy/{stock}', 'App\Http\Controllers\StockController@destroy')->name('stocks.destroy');
});

//Staff Controller

Route::prefix('staff')->group(function() {
      Route::get('/', 'App\Http\Controllers\StaffController@index')->name('staff.index');
      Route::get('create', 'App\Http\Controllers\StaffController@create')->name('staff.create');
      Route::post('store', 'App\Http\Controllers\StaffController@store')->name('staff.store');
      Route::get('destroy/{staff}', 'App\Http\Controllers\StaffController@destroy')->name('staff.destroy');
});

Route::prefix('customer')->group(function () {
    Route::get('menus', 'App\Http\Controllers\CustomerController@index')->name('customer.index');
    Route::get('selectedCategory/{categoryId}', 'App\Http\Controllers\CustomerController@selectedCategory')->name('menu.selectedCategory');
    Route::get('checkout/{menu}', 'App\Http\Controllers\CustomerController@checkout')->name('menu.checkout');
});
