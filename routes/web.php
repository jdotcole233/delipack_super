<?php
use App\Http\Controllers\AdmminViewcontroller;

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

Route::get('/', 'AdmminViewcontroller@index');

Route::get('/company','AdmminViewcontroller@companies');
Route::get('/viewcompany/{id}','AdmminViewcontroller@viewCompany');
Route::get('/support','AdmminViewcontroller@viewSupport');
Route::get('/promotions','AdmminViewcontroller@promotions');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addCompany','AdmminViewcontroller@addCompany')->middleware("superauth");
Route::post('/updateCompany','AdmminViewcontroller@updateCompany')->middleware("superauth");
Route::post('/suplogin','SuperLoginController@authenticateSuperUser')->name('superlogin');
Route::post('/suplogout','SuperLoginController@superLogout')->name('superlogout');
Route::post('/add-subscription','AdmminViewcontroller@addSubscription')->name('add-subscription');
// Route::post('/sendMessage', 'AdmminViewcontroller@sendMessage');
