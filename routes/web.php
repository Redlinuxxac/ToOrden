<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('pagenofound', ['as' => 'notfound', 'uses' => 'HomeController@pagenofound']);
Route::get('password.request', function ($mail) {
    return 'ya';
})->name('password.request');

Route::get('/', function(){
    $school = new App\School;
    
    return view('auth.login');
});

Auth::routes();

Route::post('login', 'Auth\LoginController@login')->name('login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/panel/inicio', function () {
    
    return view('inicio');
});

Route::get('storage-link', function(){
    Artisan::call('storage:link');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/inscripcion', 'RegistrationStudentController')->names('inscripcion');
Route::post('/inscripcion/buscar', 'RegistrationStudentController@buscar')->name('inscripcion.buscar');
