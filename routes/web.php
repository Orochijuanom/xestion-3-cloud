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

/** FORMULARIO 2 **/
Route::get('/cloud/form/2', function() {
    return view('cloud.2');
});

Route::post('/cloud/form/2', 't1Controller@form2'); 
/** END FORM 2 **/

/** FORMULARIO 3 **/
Route::get('/cloud/form/3', function() {
    return view('cloud.3');
});

Route::post('/cloud/form/3', 't3Controller@form3');
/** END FORM 3 **/

/** FORMULARIO 4 **/
Route::get('/cloud/form/4', function() {
    return view('cloud.4');
});

Route::post('/cloud/form/4', 't1Controller@form4'); 
/** END FORM 4 **/

/** FORMULARIO 4-4 **/
Route::get('/cloud/form/4-4', function() {
    return view('cloud.4-4');
});

Route::post('/cloud/form/4-4', 't1Controller@form4-4'); 
/** END FORM 4-4 **/

/** FORMULARIO 5 **/
Route::get('/cloud/form/5', function() {
    return view('cloud.5');
});

Route::post('/cloud/form/5', 't1Controller@form5'); 
/** END FORM 5 **/

/** FORMULARIO 6 **/
Route::get('/cloud/form/6', function() {
    return view('cloud.6');
});

Route::post('/cloud/form/6', 't1Controller@form6'); 
/** END FORM 6 **/

/** FORMULARIO 7 **/
Route::get('/cloud/form/7', function() {
    return view('cloud.7');
});

Route::post('/cloud/form/7', 't7Controller@form7');
/** END FORM 7 **/

/** FORMULARIO 8 **/
Route::get('/cloud/form/8', function() {
    return view('cloud.8');
});

Route::post('/cloud/form/8', 't1Controller@form8'); 
/** END FORM 8 **/

/** FORMULARIO 9 **/
Route::get('/cloud/form/9', function() {
    return view('cloud.9');
});

Route::post('/cloud/form/9', 't1Controller@form9'); 
/** END FORM 9 **/

/** FORMULARIO 10 **/
Route::get('/cloud/form/10', function() {
    return view('cloud.10');
});

Route::post('/cloud/form/10', 't1Controller@form10'); 
/** END FORM 10 **/

/** FORMULARIO 11 **/
Route::get('/cloud/form/11', function() {
    return view('cloud.11');
});

Route::post('/cloud/form/11', 't1Controller@form11'); 
/** END FORM 11 **/

/** FORMULARIO 12 **/
Route::get('/cloud/form/12', function() {
    return view('cloud.12');
});

Route::post('/cloud/form/12', 't1Controller@form12'); 
/** END FORM 12 **/

/** FORMULARIO 13 **/
Route::get('/cloud/form/13', function() {
    return view('cloud.13');
});

Route::post('/cloud/form/13', 't1Controller@form13'); 
/** END FORM 13 **/



Auth::routes();

Route::get('/home', 'HomeController@index');
