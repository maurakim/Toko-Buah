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

Route::get('/lemot', function () {
    echo "kenapa ;/kok lemot";
});

Route::get('/home', function () {
    echo "di sini omah";
});

Route::get('/sama', function () {
    return "sama saja sami mawon omah";
});

Route::get('/pohong', function () {
    return view('telo');
});

//pakai controller
Route::get('/terong', 'CapungController@index');

//memanggil controller capung dengan fungsi pujangga
Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');

//sekarang membuat route untuk customer
//Route::get('/Customer', 'CustomerController@index');
//route add untuk customer
//Route::get('/Customer/create', 'CustomerController@create');
//untuk store dari customer
//Route::get('/Customer/store', 'CustomerController@store');
Route::resource('Customer', 'CustomerController');

//route untuk supplier
Route::resource('/Supplier', 'SupplierController');

//route untuk employee
Route::resource('/Employee', 'EmployeeController');
