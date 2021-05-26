<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\LoginController;
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

// login
Route::get('/login', 'LoginController@getLogin')->name('authentication.login');
Route::post('/login', 'LoginController@postLogin')->name('authentication.post_login');
//register
Route::get('/register', 'LoginController@getRegister')->name('authentication.register');
Route::post('/register', 'LoginController@postRegister')->name('authentication.post_register');

//logout
Route::get('/logout', 'LoginController@getLogout')->name('authentication.logout');
  
//middleware
Route::group(['middleware' => ['auth'], 'prefix' => 'admincp','namespace' => 'Admin'], function() {
	
	Route::get('dashboard', 'AdminController@index')->name('dashboard.index');
	//quan ly tai khoan
		Route::prefix('account-manager')->group(function(){
			// hien thi danh sach tai khoan
			Route::get('list', 'AccountManagerController@getList')->name('account_manager.get_list');
			// tao tai khoan
			Route::get('create',  'AccountManagerController@create')->name('account_manager.create');
			Route::post('store','AccountManagerController@store')->name('account_manager.store');
			// chinh sua tai khoan
			Route::get('edit/{id}', 'AccountManagerController@edit')->name('account_manager.edit');
			Route::post('update/{id}','AccountManagerController@update')->name('account_manager.update');
			Route::get('delete/{id}', 'AccountManagerController@delete')->name('account_manager.delete');

		});
	//end quan ly tai khoan
	// quan ly bai viet
	Route::get('posts', 'AdminController@toPost')->name('dashboard.posts');
	//end quan ly bai viet
	//quan ly hoi dap
	Route::get('q&a', 'AdminController@toqanda')->name('dashboaard.q&a');
	//end quan ly hoi dap
});

    //
Route::get('trangchu', function () {
    return view('Pages-user.trangchu');
});





