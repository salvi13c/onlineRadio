<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stationsPageController;
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
use App\Http\Controllers\Administration\AdministrationPanelController;
use App\Http\Controllers\Administration\AdministrationCRUDQueryController;
use App\Http\Controllers\Administration\AdministrationAddCountriesController;
use App\Http\Controllers\Administration\AdministrationAddGeneresController;
use App\Http\Controllers\Administration\AdministrationAddStationsController;
use App\Http\Controllers\Administration\AdministrationEditStationsController;
use App\Http\Controllers\Administration\AdministrationEditCountriesController;
use App\Http\Controllers\Administration\AdministrationEditGeneresController;
use App\Http\Controllers\ListCountriesController;
use App\Http\Controllers\ListGeneresController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SearchStationsController;
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
Route::get('/stations', stationsPageController::class);
Route::get('/stations/bygenere/{name}',genereStationListController::class);
Route::get('/stations/bycountry/{name}',countryStationListController::class);
Route::get('/news', newsController::class);
Route::get('/login',loginController::class);
Route::get('/register',registerUserController::class);
Route::get('/topcharts',topChartsController::class);
Route::get('/detailsstation/{id}',detailsStationController::class);
Route::get('/about',aboutUsController::class);
Route::get('/login/setsession/{status}/{uidd}/{name?}/{email?}',userSessionController::class);

Route::get('/list/generes',listGeneresController::class);
Route::get('/list/countries',listCountriesController::class);
Route::get('/user/profile',userProfileController::class);

//Admin Routes
Route::get('/adminpanel',administrationPanelController::class);
Route::get('/adminpanel/crud/',administrationCRUDQueryController::class);
Route::get('/adminpanel/crud/add/station',administrationAddStationsController::class);
Route::get('/adminpanel/crud/add/country',administrationAddCountriesController::class);
Route::get('/adminpanel/crud/add/genere',AdministrationAddGeneresController::class);
Route::get('/adminpanel/crud/edit/station/{name}/{description}/{image}/{country}/{genere}/{url}/{id}',AdministrationEditStationsController::class);
Route::get('/adminpanel/crud/edit/country/{name}/{continent}/{language}/{id}',AdministrationEditCountriesController::class);
Route::get('/adminpanel/crud/edit/genere/{name}/{description}/{id}',AdministrationEditGeneresController::class);


Route::get('/adminpanel/crud/add/{type}/{action}/{name}/{description}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/add/{type}/{action}/{name}/{continent}/{language}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/add/{type}/{action}/{name}/{description}/{image}/{country}/{genere}/{url}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/update/{type}/{action}/{name}/{description}/{id}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/update/{type}/{action}/{name}/{continent}/{language}/{id}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/update/{type}/{action}/{name}/{description}/{image}/{country}/{genere}/{url}/{id}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/delete/{type}/{action}/{id}',AdministrationCRUDQueryController::class);


//Search 
Route::get('/search',SearchStationsController::class);

