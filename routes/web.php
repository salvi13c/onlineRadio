<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stationsPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\RegisterUserController;
use App\Http\Controllers\Login\userSessionController;
use App\Http\Controllers\Login\ChangePasswordController;
use App\Http\Controllers\TopChartsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\Administration\AdministrationPanelController;
use App\Http\Controllers\Administration\AdministrationCRUDQueryController;
use App\Http\Controllers\Administration\AdministrationAddCountriesController;
use App\Http\Controllers\Administration\AdministrationAddGeneresController;
use App\Http\Controllers\Administration\AdministrationAddStationsController;
use App\Http\Controllers\Administration\AdministrationEditStationsController;
use App\Http\Controllers\Administration\AdministrationEditCountriesController;
use App\Http\Controllers\Administration\AdministrationEditGeneresController;
use App\Http\Controllers\Administration\AdministrationEditSettingsController;

use App\Http\Controllers\Lists\ListCountriesController;
use App\Http\Controllers\Lists\ListGeneresController;
use App\Http\Controllers\Lists\genereStationListController;
use App\Http\Controllers\Lists\CountryStationListController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Search\SearchStationsController;
use App\Http\Controllers\Search\SearchStationsResultsController;
use App\Http\Controllers\Historial\HistorialController;
use App\Http\Controllers\Historial\DeleteHistorialController;
use App\Http\Controllers\Suggestions\SendSuggestionsController;
use App\Http\Controllers\Suggestions\SuggestionsController;
use App\Http\Controllers\Lists\DetailsStationController;
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
Route::get('/stations/bycountry/{name}',CountryStationListController::class);
Route::get('/news', newsController::class);
Route::get('/login',LoginController::class);
Route::get('/register',registerUserController::class);
Route::get('/topcharts',topChartsController::class);
Route::get('/detailsstation/{id}',DetailsStationController::class);
Route::get('/about',aboutUsController::class);
Route::get('/login/setsession/{status}/{uuid}/{name?}/{email?}',userSessionController::class);

Route::get('/list/generes',listGeneresController::class);
Route::get('/list/countries',listCountriesController::class);
Route::get('/user/profile',userProfileController::class);
Route::get('/historial',HistorialController::class);
Route::get('/historial/delete',DeleteHistorialController::class);

//Admin Routes
Route::get('/adminpanel',administrationPanelController::class);
Route::get('/adminpanel/crud/',administrationCRUDQueryController::class);
Route::get('/adminpanel/crud/add/station',administrationAddStationsController::class);
Route::get('/adminpanel/crud/add/country',administrationAddCountriesController::class);
Route::get('/adminpanel/crud/add/genere',AdministrationAddGeneresController::class);
Route::get('/adminpanel/crud/edit/station/{name}/{description}/{image}/{country}/{genere}/{url}/{id}',AdministrationEditStationsController::class);
Route::get('/adminpanel/crud/edit/country/{name}/{continent}/{language}/{id}',AdministrationEditCountriesController::class);
Route::get('/adminpanel/crud/edit/genere/{name}/{description}/{id}',AdministrationEditGeneresController::class);
Route::get('/adminpanel/crud/edit/settings/{config_name}/{value}/{id}',AdministrationEditSettingsController::class);


Route::get('/adminpanel/crud/add/{type}/{action}/{name}/{description}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/add/{type}/{action}/{name}/{continent}/{language}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/add/{type}/{action}/{name}/{description}/{image}/{country}/{genere}/{url}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/update/{type}/{action}/{name}/{description}/{id}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/update/{type}/{action}/{name}/{continent}/{language}/{id}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/update/{type}/{action}/{name}/{description}/{image}/{country}/{genere}/{url}/{id}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/update/{type}/{action}/{value}/{id}',AdministrationCRUDQueryController::class);
Route::get('/adminpanel/crud/delete/{type}/{action}/{id}',AdministrationCRUDQueryController::class);

Route::get('/changepassword',ChangePasswordController::class);


//Search 
Route::get('/search',SearchStationsController::class);
Route::post('/search/results',SearchStationsResultsController::class);

//suggestions
Route::get('/report',SuggestionsController::class);
Route::post('/report/send',SendSuggestionsController::class);


