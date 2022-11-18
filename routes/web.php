<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Auth::routes(['verify' => true]);
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('profile', 'ProfileController@index');

    // Administrator
    Route::get('admin_index', 'AdminController@index');

    // Users
    Route::get('admin/users', 'UserController@index');

    // Events
    Route::get('events', 'EventController@events');

    // Approve Request
    Route::get('account_request', 'AccountRequestController@accountRequest');
    Route::post('rejectRequest/{id}', 'AccountRequestController@reject_request');
    Route::post('approveRequest/{id}', 'AccountRequestController@approve_request');

    // Profile
    Route::get('profile', 'ProfileController@index');

    // Events
    Route::get('event', 'EventController@index');

    // Marketplace
    Route::get('marketplace', 'MarketplaceController@index');
});
Route::post('saveUser', 'RegisterController@save');
Route::post('requestAccount', 'AccountRequestController@request_account');

// Route::get('signup', 'RegisterController@register');
