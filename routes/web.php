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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('fileUpload',[
    'as'=>'cv.add',
    'uses'=>'DashboardController@fileUpload'
]);

Route::get('/', 'PageController@index');
Route::resource('jobs','JobpostController');
Route::get('/companyregister','PageController@register');



Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
 Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
 Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
 Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

 //Password resets routes

 Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
 Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
 Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
 Route::post('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


 Route::get('/', "AdminController@index")->name('admin.dashboard');
});
