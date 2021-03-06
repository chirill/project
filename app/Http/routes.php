<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin',['as'=>'admin.index',function(){
        return view('admin.index');
    }]);
    Route::resource('/admin/users','AdminUsersController');

    Route::resource('/admin/locations','AdminLocationsController');

    Route::resource('/admin/companies','AdminCompaniesController');

    Route::resource('/admin/roles','AdminRolesController');





});

//Route::get('/broker/admin',['as'=>'broker.home',function(){
//    return "hi";
//}]);
Route::auth();

Route::get('/home', 'HomeController@index');
