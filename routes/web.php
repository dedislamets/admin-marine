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
Auth::routes();
Route::group([
	'middleware' => [
		'auth'
	]
], function () {

	Route::get('/','HomeController@index');
	Route::get('home','HomeController@index');
	Route::get('logout', array('uses' => 'HomeController@logout'));
	Route::get('slide','SlideController@index');

	Route::get('profil','ProfilController@index');
	Route::post('profil', ['uses' => 'ProfilController@store']);
	Route::get('profil/{id}', ['uses' => 'ProfilController@edit']);
	Route::delete('profil/{id}', ['uses' => 'ProfilController@destroy']);

	Route::get('users','RegisterController@index');
	Route::get('dtRegister', 'RegisterController@dt');

	Route::get('pengajuan','PengajuanController@index');
	Route::get('pengajuan/sign/1','PengajuanController@sign_a');
	Route::get('pengajuan/sign/2','PengajuanController@sign_b');
	Route::get('pengajuan/meetup','PengajuanController@meetup');
	Route::get('pengajuan/deal','PengajuanController@deal');

	Route::get('dtwaiting', 'PengajuanController@dt_waiting');
	Route::get('dtsign1', 'PengajuanController@dt_sign_1');
	Route::get('dtsign2', 'PengajuanController@dt_sign_2');
	Route::get('dtmeet', 'PengajuanController@dt_meet');
	Route::get('dtdeal', 'PengajuanController@dt_deal');
});




