<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadioPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\TopChartsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DetailsStationController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\userSessionController;
use App\Http\Controllers\genereStationListController;
use App\Http\Controllers\countryStationListController;
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

Route::get('/', homePageController::class);
Route::get('/home', homePageController::class);
Route::get('/radio', radioPageController::class);
Route::get('/radio/stationsbygenere/{name}',genereStationListController::class);
Route::get('/radio/stationsbycountry/{name}',countryStationListController::class);
Route::get('/news', newsController::class);
Route::get('/login',loginController::class);
Route::get('/register',registerUserController::class);
Route::get('/topcharts',topChartsController::class);
Route::get('/detailsstation/{id}',detailsStationController::class);
Route::get('/about',aboutUsController::class);
Route::get('/login/setsession/{status}/{uidd}/{name?}/{email?}',userSessionController::class);

