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

Route::get('/cloud/panel', function() {
    return view('cloud.panel');    
});

Route::get('/cloud/admin', function() {
    $users = App\User::all();
    return view('cloud.admin')->with('users', $users);
});

Route::get('/cloud/user/{user_id}', function($user_id) {
    $user = App\User::find($user_id);
    return view('cloud.admin_edit')->withUser($user);
});

Route::put('/cloud/user/{user_id}', 'UserController@update');

Route::get('/cloud', function() {
    return view('cloud.index');
});

/** FORMULARIO 1 **/
Route::get('/cloud/form/1', function() {
    return view('cloud.1');
});

Route::post('/cloud/form/1', 't1Controller@form1'); 

/** END FORM 1 **/


Route::get('/cloud/form/2', function() {
    return view('cloud.2');
});


/** FORMULARIO 3 **/
Route::get('/cloud/form/3', function() {
    return view('cloud.3');
});

Route::post('/cloud/form/3', 't3Controller@form3');
/** END FORM 3 **/

Route::get('/cloud/form/4', function() {
    return view('cloud.4');
});

Route::get('/cloud/form/4-4', function() {
    return view('cloud.4-4');
});

Route::get('/cloud/form/5', function() {
    return view('cloud.5');
});

Route::get('/cloud/form/6', function() {
    return view('cloud.6');
});

Route::get('/cloud/form/7', function() {
    return view('cloud.7');
});

Route::post('/cloud/form/7', 't7Controller@form7');


Route::get('/cloud/form/8', function() {
    return view('cloud.8');
});

Route::get('/cloud/form/9', function() {
    return view('cloud.9');
});

Route::get('/cloud/form/10', function() {
    return view('cloud.10');
});

Route::get('/cloud/form/11', function() {
    return view('cloud.11');
});

Route::get('/cloud/form/12', function() {
    return view('cloud.12');
});

Route::get('/cloud/form/13', function() {
    return view('cloud.13');
});




Auth::routes();

Route::get('/home', 'HomeController@index');
