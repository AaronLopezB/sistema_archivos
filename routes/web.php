<?php

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

/* Route::get('/', function () {
    if (request()->session()->get('activo') == true) {
        return redirect()->route('admin');
    } else {
        return view('auth.login');
    }
}); */

Auth::routes();
Route::auth();
/* Route::post('login', 'AuthController@login')->name('login');
Route::get('logout', 'AuthController@logout')->name('logout'); */

Route::get('/vista_genera','SupervisorController@index')->name('vista_genera');
Route::get('/carpeta/{carpeta}','SupervisorController@show')->name('carpeta');
Route::get('/download/{archivo}','SupervisorController@download')->name("download");
Route::post('/save/archivo','SupervisorController@saveArchivo')->name("save.archivo");

Route::middleware(['auth'])->group(function(){
    Route::get('/', 'SupervisorController@index')->name('admin');
    Route::get('/home', 'HomeController@index')->name('home');
});
