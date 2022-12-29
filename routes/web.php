<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Session;

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

Route::controller(RouteController::class)->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/catalog', 'catalog')->name('catalog');
    Route::get('/contacts', 'contacts')->name('contacts');
;});

Route::get('/locale/{lang}', function ($lang){
    Session::put('lang', $lang);
    return redirect()->back();
})->name('locale');
