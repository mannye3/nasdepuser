<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [PublicController::class,'index']);


Route::get('/', 'PublicController@index')->name('index');
Route::get('about', 'PublicController@about')->name('about');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::get('pricing', 'PublicController@pricing')->name('pricing');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//Profile
Route::get('profile', 'DashboardController@profile')->name('profile');
Route::post('profileUpdate', 'DashboardController@profileUpdate')->name('profileUpdate');
Route::post('profilePassword', 'DashboardController@profilePassword')->name('profilePassword');



//Investtors
Route::get('investors', 'DashboardController@investors')->name('investors');
Route::get('investor/{id}', 'DashboardController@investor')->name('investor');



//analysts
Route::get('analysts', 'DashboardController@analysts')->name('analysts');
Route::get('analyst/{id}', 'DashboardController@analyst')->name('analyst');


//incubators
Route::get('incubators', 'DashboardController@incubators')->name('incubators');
Route::get('incubator/{id}', 'DashboardController@incubator')->name('incubator');



//Poola
Route::get('pools', 'DashboardController@pools')->name('pools');
Route::get('pool/{id}', 'DashboardController@pool')->name('pool');





//Unpoos
Route::get('upools', 'DashboardController@upools')->name('upools');
Route::get('upool/{id}', 'DashboardController@upool')->name('upool');


//KYC
Route::get('add_enterprise', 'DashboardController@add_enterprise')->name('add_enterprise');
Route::get('ddakyc', 'DashboardController@ddakyc')->name('ddakyc');



 Route::post('submitKYC',[DashboardController::class, 'submitKYC'])->name('submitKYC');
 Route::post('submitDDAKYC',[DashboardController::class, 'submitDDAKYC'])->name('submitDDAKYC');



//Route::get('upool/{id}', 'DashboardController@upool')->name('upool');


