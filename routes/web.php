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

Route::get('/add-remitter', function () {
    return view('remitter.addRemitter');
});

Route::get('/update-remitter', function () {
    return view('remitter.updateRemitter');
});

Route::get('/remitter-payment', function () {
    return view('remitter.payment');
});

Route::get('/update-beneficiary', function () {
    return view('beneficiary.updateBeneficiary');
});

Route::get('/show-remitter-beneficiaries', function () {
    return view('beneficiary.showRemBeneList');
});

Route::get('/add-new-beneficiary', function () {
    return view('beneficiary.addRemBene');
});


Route::get('/show-beneficiary-info', function () {
    return view('beneficiary.showBeneInfo');
});







