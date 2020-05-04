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

Route::get('/', 'Auth\LoginController@redirectToProvider');  // เข้า Line
Route::get('/login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('/logout', 'Auth\LoginController@logout'); // logout
// Route::get('home', 'Buyer\\BuyerController@index')->name('home');

//Route::prefix('login')->group(function () {
    //Route::get('/', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('login/line/callback', 'Auth\LoginController@handleProviderCallback')->name('login.provider.callback');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth']], function () {
	Route::get('/', 'Buyer\\BuyerController@index')->name('home');
	Route::resource('/buyer','Buyer\\BuyerController');
	Route::post('/buyer/order/confirm','Buyer\\OrderController@confirm');

	Route::resource('/seller/lotto','Seller\\LottoController');
	Route::resource('/seller/','Seller\\SellerController');

	Route::resource('/admin/member', 'Admin\\MemberController');
	Route::resource('/admin/test', 'Admin\\TestController');
	Route::get('/admin', 'Admin\DashboardController@index');
});


