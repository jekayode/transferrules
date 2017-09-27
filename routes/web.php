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

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


  //Wallets Routes
  Route::get('/wallets', 'Admin\WalletController@index')->name('wallets.index');
  Route::get('/wallets/details/{id}', 'Admin\WalletController@details')->name('wallets.details');
  Route::get('/wallets/add', 'Admin\WalletController@add')->name('wallets.add');
  Route::post('/wallets/insert', 'Admin\WalletController@insert')->name('wallets.insert');
  Route::get('/wallets/edit/{id}', 'Admin\WalletController@edit')->name('wallets.edit');
  Route::post('/wallets/update/{id}', 'Admin\WalletController@update')->name('wallets.update');
  Route::get('/wallets/delete/{id}', 'Admin\WalletController@delete')->name('wallets.delete');

  //Beneficiaries Routes

  Route::get('/beneficiaries', 'Admin\BeneficiaryController@index')->name('beneficiaries.index');
  Route::get('/beneficiaries/details/{id}', 'Admin\BeneficiaryController@details')->name('beneficiaries.details');
  Route::get('/beneficiaries/add', 'Admin\BeneficiaryController@add')->name('beneficiaries.add');
  Route::post('/beneficiaries/insert', 'Admin\BeneficiaryController@insert')->name('beneficiaries.insert');
  Route::get('/beneficiaries/edit/{id}', 'Admin\BeneficiaryController@edit')->name('beneficiaries.edit');
  Route::post('/beneficiaries/update/{id}', 'Admin\BeneficiaryController@update')->name('beneficiaries.update');
  Route::get('/beneficiaries/delete/{id}', 'Admin\BeneficiaryController@delete')->name('beneficiaries.delete');



});
