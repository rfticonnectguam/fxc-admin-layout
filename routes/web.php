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

Route::get('/remitter', function () {
    return view('remitter.remitter');
});

Route::get('/show-remitter-info', function () {
    return view('remitter.showRemitterInfo');
});

Route::get('/show-remitter-beneficiaries', function () {
    return view('remitter.showRemitterBene');
});

Route::get('/add-new-beneficiary', function () {
    return view('remitter.addNewBeneficiary');
});

Route::get('/remitter-payment', function () {
    return view('remitter.payment');
});




