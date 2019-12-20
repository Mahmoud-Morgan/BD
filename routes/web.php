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



Route::get('/donor','DonorController@index');

Route::post('/donorstore','DonorController@store');

Route::get('/search','DonorController@filter');

Route::post('/search','DonorController@filter');

Route::get('/patient','PatientController@index');

Route::post('/patientstore','PatientController@store');

Route::get('/',function (){
    return view('home');
});

Route::get('/layout',function (){
    return view('layout');
});

Route::get('/thnx',function (){
    return view('thnxdonor');
});


Route::get('/info',function (){
    return view('info');
});

Route::get('/aboutus',function (){
    return view('aboutus');
});

Route::get('/pr',function (){
    return view('emails.patientRequest');
});

Route::get('/sr',function (){
    return view('sentRequest');
});


Route::get('/df',function (){
    return view('donorform');
});

Route::get('/dr',function (){
    return view('emails.donorRegistration');
});

Route::post('/fetch', 'DonorController@fetch');



