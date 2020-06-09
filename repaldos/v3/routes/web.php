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

Route::get('/', function () {
    if( Auth::user() )
    {
        if(Auth::user()->hasRole('cobrador')){
        return view('cobrador.home');
        }
        if(Auth::user()->hasRole('suscriptor')){
            return view('suscriptor.home');
        }
    }
    return view('welcome');
});


Route::get('/home', function () {
	if( Auth::user() )
    {
        if(Auth::user()->hasRole('cobrador')){
        return view('cobrador.home');
        }
        if(Auth::user()->hasRole('suscriptor')){
            return view('suscriptor.home');
        }
    }
    return view('welcome');
});


Auth::routes();


 // RUTAS PARA PODER VALIDAR EL CORREO
//Route::get('/email_available', 'EmailAvailable@index');
//Route::post('/email_available/check', 'EmailAvailable@check')->name('email_available.check');


Route::get('/servicios', function () {
    return view('servicios');
});


Route::group(['prefix'=>'suscriptor','middleware'=>'role:suscriptor'],function(){
	Route::get('/home', 'HomeController@index2')->name('home');

});




Route::group(['prefix'=>'cobrador','middleware'=>'role:cobrador'],function(){

    Route::get('/home', 'HomeController@index3')->name('home');

});