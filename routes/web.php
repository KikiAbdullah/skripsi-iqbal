<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/', 'AppController@index')->name('siteurl');

    Route::group(['prefix' => 'user-setup', 'as' => 'user-setup.'], function () {
        Route::middleware('can:view_users')->resource('user', 'UserController');
    });

    Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
        Route::group(['prefix' => 'kerusakan', 'as' => 'kerusakan.'], function () {
            Route::get('get-data', 'Master\KerusakanController@ajaxData')->name('get-data');
        });
        Route::middleware('can:master_kerusakan')->resource('kerusakan', 'Master\KerusakanController');

        Route::group(['prefix' => 'gejala', 'as' => 'gejala.'], function () {
            Route::get('get-data', 'Master\GejalaController@ajaxData')->name('get-data');
        });
        Route::middleware('can:master_gejala')->resource('gejala', 'Master\GejalaController');

        Route::group(['prefix' => 'rule', 'as' => 'rule.'], function () {
            Route::get('get-data', 'Master\RuleController@ajaxData')->name('get-data');
        });
        Route::middleware('can:master_rule')->resource('rule', 'Master\RuleController');

        Route::group(['prefix' => 'tipe-motor', 'as' => 'tipe-motor.'], function () {
            Route::get('get-data', 'Master\TipeMotorController@ajaxData')->name('get-data');
        });
        Route::middleware('can:master_tipe_motor')->resource('tipe-motor', 'Master\TipeMotorController');
    });

    Route::group(['prefix' => 'diagnosa', 'as' => 'diagnosa.'], function () {
        Route::get('get-data', 'DiagnosaController@ajaxData')->name('get-data');
    });
    Route::middleware('can:diagnosa_view')->resource('diagnosa', 'DiagnosaController');

    Route::get('/listuser', 'UserController@ajaxData')->name('get.user')->middleware('can:view_users');

    Route::get('/permission', 'AppController@permission')->name('permission')->middleware('can:view_permissions');
    Route::get('/permission-list', 'AppController@permissionlist')->name('permission.list');
    Route::get('/role', 'AppController@role')->name('role')->middleware('can:view_roles');
    Route::post('/getroles', 'AppController@getroles')->name('get.roles');
    Route::post('/addroles', 'AppController@saverole')->name('add.roles')->middleware('can:edit_roles');
    Route::delete('/deleteroles', 'AppController@deleteroles')->name('delete.roles')->middleware('can:edit_roles');
    Route::post('/getmenuoptionroles', 'AppController@menuoptionroles')->name('get.roles.menu');
    Route::post('/getlinesroles', 'AppController@lineroles')->name('get.roles.line');
    Route::post('/gethakakses', 'AppController@hakakses')->name('get.hakakses');
    Route::post('/gethakakses2', 'AppController@hakakses2')->name('get.hakakses2');
    Route::post('/addhakakses', 'AppController@addhakakses')->name('add.hakakses')->middleware('can:edit_roles');
    Route::post('/removehakakses', 'AppController@removehakakses')->name('remove.hakakses')->middleware('can:edit_roles');

    //others
    Route::get('get-button-option', 'AjaxController@getButtonOption')->name('get.button-option');
    Route::get('set-dark-theme', 'AppController@toggletheme')->name('toggle.theme');
    Route::post('changepassword', 'AppController@changepassword')->name('changepassword');
});


///FRONT
Route::get('/', 'FrontController@index')->name('front');
Route::get('/about', 'FrontController@about')->name('front.about');
Route::get('/informasi', 'FrontController@informasi')->name('front.informasi');
Route::get('/info-detail', 'FrontController@info_detail')->name('front.info-detail');
Route::get('/panduan', 'FrontController@panduan')->name('front.panduan');


Route::get('/form', 'FrontController@form')->name('front.form');
Route::post('/diagnosa', 'DiagnosaController@diagnosa')->name('front.diagnosa');
Route::get('/hasil', 'FrontController@hasil')->name('front.hasil');
