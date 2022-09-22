<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;

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

Route::group([
    'prefix' => 'cok',
    // 'middleware' => ['']
], function(){
    
    // Route::get('cok','MahasiswaController@index')->name('mahasiswa.index');
    // Route::get('cok/create','MahasiswaController@create')->name('mahasiswa.create');
    // Route::post('cok/store','MahasiswaController@store')->name('mahasiswa.store');
    // Route::get('cok/{id}/edit','MahasiswaController@edit')->name('mahasiswa.edit');
    // Route::put('cok/{id}','MahasiswaController@update')->name('mahasiswa.update');
    // Route::delete('cok/{id}','MahasiswaController@destroy')->name('mahasiswa.destroy');
    // Route::resource('mahasiswa', 'MahasiswaController', ['as' => 'admin']);
    Route::resource('mahasiswa', 'MahasiswaController');
    
});

Route::group([
    'prefix' => 'cok',
    'namespace' => 'Cok'
], function(){
    
        Route::resource('test', 'AsuController');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
