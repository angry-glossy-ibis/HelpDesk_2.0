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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//////////////////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/index', 'AdminController@index')
      ->name('AdminPanel.index');

Route::resource('AdminPanel', 'AdminController');
//////////////////////////////////////////////////////////////////////////////////////////
Route::get('request/storereq', 'RequestController@storereq')
      ->name('requests.storereq');

Route::get('request/create', 'RequestController@create')
      ->name('requests.create');

Route::get('requests/index', 'RequestController@index')
      ->name('requests.index');

Route::put('requests/{request1}', 'RequestController@update')
      ->name('requests.update');
Route::resource('requests', 'RequestController');
/////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/request/index', 'AdminRequestController@index')
      ->name('AdminPanel/request/index');

Route::resource('req', 'AdminRequestController');
////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/request/{request1}/show', 'AdminRequestController@show')
      ->name('AdminPanel/request/show');
Route::resource('request1', 'AdminRequestController');
/////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('WorkerPanel/index', 'WorkerController@index')
      ->name('WorkerPanel.index');

Route::put('WorkerPanel/{request1}/decrating', 'WorkerController@decrating')
      ->name('WorkerPanel.decrating');

Route::put('WorkerPanel/{request1}/incrating', 'WorkerController@incrating')
      ->name('WorkerPanel.incrating');

Route::resource('requests1', 'RequestController');
//////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('WorkerPanel/{request1}/edit', 'WorkerController@edit')
      ->name('WorkerPanel.edit');

Route::get('WorkerPanel/{request1}/show', 'WorkerController@show')
      ->name('WorkerPanel.show');
Route::put('WorkerPanel/{request1}/update', 'WorkerController@update')
      ->name('WorkerPanel.update');
Route::get('WorkerPanel/{request1}/remove', 'WorkerController@remove')
      ->name('WorkerPanel.remove');
Route::get('WorkerPanel/{request1}/destroy', 'WorkerController@destroy')
      ->name('WorkerPanel/destroy');
Route::get('WorkerPanel/CreateMail', 'WorkerController@CreateMail')
            ->name('WorkerPanel.CreateMail');
///////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/Users/index', 'UserController@index')
      ->name('AdminPanel/Users/index');

Route::get('AdminPanel/Users/{user1}/show', 'UserController@show')
      ->name('AdminPanel/Users/show');
/////////////////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/Users/{user1}/edit', 'UserController@edit')
      ->name('AdminPanel/Users/edit');
Route::get('AdminPanel/Users/{user1}/update', 'UserController@update')
      ->name('AdminPanel/Users/update');
////////////////////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/Users/create', 'UserController@create')
      ->name('AdminPanel/Users/create');

Route::post('AdminPanel/Users/store', 'UserController@store')
      ->name('AdminPanel/Users/store');

Route::get('AdminPanel/Users/{user1}/remove', 'UserController@remove')
      ->name('AdminPanel/Users/remove');

Route::get('AdminPanel/Users/destroy', 'UserController@destroy')
      ->name('AdminPanel/Users/destroy');
Route::resource('user', 'UserController');
////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/Companies/index', 'CompanyController@index')
      ->name('AdminPanel/Companies/index');

Route::get('AdminPanel/Companies/create', 'CompanyController@create')
      ->name('AdminPanel/Companies/create');

Route::get('AdminPanel/Companies/{company}/show', 'CompanyController@show')
      ->name('AdminPanel/Companies/show');

Route::get('AdminPanel/Companies/{company}/edit', 'CompanyController@edit')
      ->name('AdminPanel/Companies/edit');

Route::put('AdminPanel/Companies/{company}/update', 'CompanyController@update')
     ->name('AdminPanel/Companies/update');

Route::get('AdminPanel/Companies/{company}/remove', 'CompanyController@remove')
      ->name('AdminPanel/Companies/remove');

Route::delete('AdminPanel/Companies/{company}', 'CompanyController@destroy')
      ->name('AdminPanel/Companies/destroy');

Route::post('AdminPanel/Companies/storemodal', 'CompanyController@storemodal')
      ->name('companies.storemodal');

Route::resource('companies', 'CompanyController');
///////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/Cliens/{cliens1}/show', 'ClientController@show')
      ->name('AdminPanel/Cliens/show');

Route::get('AdminPanel/Cliens/{cliens1}/edit', 'ClientController@edit')
      ->name('AdminPanel/Cliens/edit');

Route::get('AdminPanel/Cliens/{cliens1}/update', 'ClientController@update')
      ->name('AdminPanel/Cliens/update');

Route::resource('cliens1', 'ClientController');

Route::get('AdminPanel/Cliens/{cliens1}remove', 'ClientController@remove')
      ->name('AdminPanel/Cliens/remove');

Route::get('AdminPanel/Cliens/index', 'ClientController@index')
      ->name('AdminPanel/Cliens/index');

Route::resource('cliens', 'ClientController');
/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('WorkerPanel/parsing', 'WorkerController@parsing')
      ->name('WorkerPanel.parsing');
//////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('WorkerPanel/blackboard', 'WorkerController@blackboard')
      ->name('WorkerPanel.blackboard');

////////////////////////////////////////////////////////////////////////////////
Route::post('Request/blackboardmove', 'RequestController@blackboardmove')
      ->name('Request.blackboardmove');
Route::post('WorkerPanel/CreateMail', 'WorkerController@sendmail')->name('workers.createmail');
Route::resource('workers', 'WorkerController');

/////////////////////////////////////////////////////////////////////////////
Route::get('AdminPanel/Timer/index', 'AdminTimerController@index')
      ->name('AdminPanel/Timer/index');
Route::resource('time', 'AdminController');

Route::get('AdminPanel/Rating/index', 'AdminRatingController@index')
      ->name('AdminPanel/Rating/index');
Route::resource('rating', 'AdminRatingController');
/////////////////////////////////////////////////////////////////////////////
Route::get('x', 'RequestController@find')->name('requests.find');
Route::get('y', 'AdminStatisticController@y')->name('y');


Route::get('AdminPanel/Statistics/create', 'AdminStatisticController@create')
      ->name('AdminPanel/Statistics/create');

Route::get('AdminPanel/Statistics/index', 'AdminStatisticController@index')
     ->name('AdminPanel/Statistics/index');
Route::resource('statistics', 'AdminStatisticController');

//////////////////////////////////////////////////////////////////////////////////
Route::get('/AgileDosk', 'WorkerController@agileaxiss')->name('/AgileDosk');
Route::get('/rating-data/{user}', 'AdminRatingController@jsindex')->name('rating-data');
Route::get('/ErrorExp', 'WorkerController@Errorprin')->name('/ErrorExp');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('redirection', 'WorkerController@redirection')->name('redirection');
