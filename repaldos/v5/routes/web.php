<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servicio;
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


Route::get('/servicios', function () {
    $servi = Servicio::all();
        //return $servi;
        return view('servicios',compact('servi'));
});



 // RUTAS PARA PODER VALIDAR EL CORREO
Route::get('/email_available', 'EmailAvailable@index')->middleware('auth');
Route::post('/email_available/check', 'EmailAvailable@check')->name('email_available.check')->middleware('auth');




//Route::resource('Servicio','cobrador\Servicios')->middleware('auth');






Route::group(['prefix'=>'suscriptor','middleware'=>'role:suscriptor'],function(){
	Route::get('/home', 'HomeController@index2')->name('home');
    //Route::resource('Servicio','Servicios')->middleware('auth');

});




Route::group(['prefix'=>'cobrador','middleware'=>'role:cobrador'],function(){

    Route::get('/home', 'HomeController@index3')->name('home');
   
    Route::resource('Servicio','cobrador\Servicios');
});