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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('{path}',"HomeController@index")->where( 'path', '([A-z\d-/_.]+)?' );

Route::get('/new_tramite', 'AcController@tramite_nuevo')->name('ac.nuevo_tramite');

Route::get('/admin/', function () {
    if (Auth::check()) {
        return view('admin');
    }
    return redirect('/login');
});

// Route::get('/{vue_capture?}', function () {
// if (Auth::check()) {
// return view('admin');
// }
// return redirect('/login');
// })->where('vue_capture', '[\/\w\.-]*');


Route::get('/users', 'UsersController@index');
Route::post('/users', 'UsersController@create');