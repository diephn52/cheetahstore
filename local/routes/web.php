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

Route::group(['middleware' => ['web']], function() {
	
// Route::get('/', function(){return view('welcome');})->name('welcome');
	
	// Route::get('/home', 'HomeController@index');
	Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

	Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
	Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

// Authentication Routes
	Auth::routes();


// Admin (Backend)
	Route::prefix('admin')->group(function(){
		Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
		Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
		Route::get('/', 'AdminController@index')->name('admin.dashboard'); //Được gọi trong Middleware/RedirectIfAuthenticated.php/handle.
		// Search
		Route::get('/search', 'AdminController@getSearch');
		Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	// Password Reset Routes
		Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

		Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
		Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
		Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

	// Categories
		Route::resource('categories', 'CategoryController', ['except' => ['create']]);

	// Sub Category
		Route::resource('sub-categories', 'SubCategoryController', ['except' => ['create']]);

	// Slider
		Route::resource('sliders', 'SliderController', ['except' => ['create']]);

	// Product
		Route::resource('products', 'ProductController');

	// Comment
		Route::get('comments', 'AdminController@getComment')->name('admin.comments');
	// Show Users
		Route::get('users', 'AdminController@getUsers')->name('admin.users');
	});

// Home page
	Route::get('/', 'PagesController@getHome')->name('home');
	
// About page
	Route::get('about.html', 'PagesController@getAbout')->name('about');

// Women, men, kids pages
	Route::get('pages/{id}.html', 'PagesController@getPages')->name('pages');

// Show Products
	Route::get('products/{id}.html', 'PagesController@getProducts')->name('products');

// Show Product Detail
	Route::get('product/{id}.html', 'PagesController@getProduct')->name('product');

// Comment
	Route::post('product/{id}.html', 'CommentController@postComment');

// Search
	Route::get('search', 'PagesController@getSearch');

// Cart
	Route::group(['prefix'=>'cart'], function() {
		Route::get('add/{id}','CartController@getAddCart');
		Route::get('show','CartController@getShowCart');
		Route::get('delete/{id}','CartController@getDeleteCart');
		Route::get('update','CartController@getUpdateCart');
		Route::post('show','CartController@postComplete');
		Route::get('complete','CartController@getComplete');

		// Print Invoice PDF
		Route::get('invoice', 'CartController@getInvoice')->name('invoice');
	});
	

});
