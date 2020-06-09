<?php

use Illuminate\Support\Facades\Route;

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

Route::name('webhooks.mollie')->any('webhooks/mollie', 'WebHookController@handle');


// Route landinspage
Route::get('/', function () {
    return view('welcome');
});

// HOME
Route::get('/home', 'PageController@home')->name('home');

// ABOUT
Route::get('/about', 'PageController@about')->name('about');

// MAILING
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@postContact')->name('contact.save');


// BLOGS
Route::get('/blog', 'BlogController@index')->name('blogs');
Route::get('/blog/detail/{id}', 'BlogController@getDetail')->name('blog.detail');
Route::get('/blog/add', 'BlogController@addform')->name('blog.add');
Route::post('/blog/add', 'BlogController@postBlog')->name('blog.save');

// NIEUWSLETTER
Route::get('/nieuwsletter', 'PageController@nieuwsletter')->name('nieuwsletter');
Route::post('/nieuwsletter', 'PageController@postNieuwsletter')->name('nieuwsletter.save');

// DONATIONS
Route::get('/donation', 'PageController@donation')->name('donation');
Route::post('/donation', 'PageController@postDonation')->name('donation.save');
Route::post('/success', 'PageController@getSuccess')->name('donation.success');

Route::get('/donation/detail/{id}', 'PageController@getDetail')->name('donation.detail');


// Routes for Admin
Auth::routes();

Route::get('/admin', 'AdminController@admin')->name('admin');

Route::get('/admin/index', 'AdminController@index')->name('admin.index');
Route::get('/admin/edit/{blog}', 'AdminController@getEdit')->name('admin.edit');
Route::post('/admin/save/{blog}', 'AdminController@postEdit')->name('admin.save');
Route::get('/admin/delete/{id}', 'AdminController@postDelete')->name('admin.delete');

Route::get('/admin/donations/index', 'AdminController@getIndexDonations')->name('admin.donations');





