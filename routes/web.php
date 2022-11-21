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

Auth::routes(['verify' => true]);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('profile', 'ProfileController@index');

    // Administrator
    Route::get('admin_index', 'AdminController@index');
    Route::get('account_request', 'AdminController@accountRequest');
    Route::get('user_accounts', 'AdminController@userAccounts');
    Route::post('approveRequest/{id}', 'AdminController@approve_request');
    Route::post('rejectRequest/{id}', 'AdminController@reject_request');


    //All Users
    Route::post('publish-post','PostController@index');
    Route::post('like-post','PostController@likePost');
    Route::post('remove-post','PostController@remove');

    Route::post('comment','CommentController@create');
    Route::post('remove-comment','CommentController@remove');


});
Route::post('saveUser', 'RegisterController@save');
Route::post('requestAccount', 'RegisterController@request_account');