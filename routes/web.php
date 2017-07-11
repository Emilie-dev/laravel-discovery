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


// http://localhost:8000/customers

Route::get('/customers', 'CustomerController@getAllCustomers');




// http://localhost:8000/customer/AZERT
// http://localhost:8000/customer/123
// http://localhost:8000/customer/###
// http://localhost:8000/customer/KKK
// http://localhost:8000/customer/12

// Route::get('/customer/{id}', 'CustomerController@getCustomer');



// // http://localhost:8000/customer/Emilie/et/Chauvin

// Route::get('/customer/{prenom}/et/{nom}', 'CustomerController@getCustomer2');