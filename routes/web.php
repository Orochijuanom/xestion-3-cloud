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

Route::get('/cloud/create_empresa',function(){
    return view('cloud.create_empresa');
});

Route::post('/cloud/create_empresa','t1Controller@create_empresa');


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
Route::get('/cloud/form/l1', function() {
    $empresas = App\Empresa::all();    
    return view('cloud.l1')->with('empresas',$empresas);
});

Route::get('/cloud/form/t1/{empresa_id}', function($empresa_id) {
    $t1 = App\T1::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t1')
                    ->with('t1s',$t1)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/1/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    return view('cloud.1')->with('empresa',$empresa);
                            
});

Route::post('/cloud/form/1', 't1Controller@form1'); 

/** END FORM 1 **/

/** FORMULARIO 2 **/
Route::get('/cloud/form/t2/{empresa_id}', function($empresa_id) {
    $t2 = App\T2::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t2')
                    ->with('t2s',$t2)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/2/{id}', function($id) {
    $empresa = App\empresa::find($id);
    return view('cloud.2')->with('empresa', $empresa);
});

Route::post('/cloud/form/2', 't2Controller@form2'); 

Route::get('/cloud/form/2/ver/{id}', function($id) {
    $t2 = App\T2::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t2Detalles')
                    ->with('t2Notas')
                    ->first();
    return view('cloud.2_ver')->with('t2', $t2);
}); 
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
Route::get('/cloud/form/t6/{empresa_id}', function($empresa_id) {
    $t6 = App\T6::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t6')
                    ->with('t6s',$t6)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/6/{id}', function($id) {
    $empresa = App\empresa::find($id);
    return view('cloud.6')->with('empresa', $empresa);
});

Route::post('/cloud/form/6', 't6Controller@form6'); 

Route::get('/cloud/form/6/ver/{id}', function($id) {
    $t6 = App\T6::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t6Detalles')
                    ->first();
    return view('cloud.6_ver')->with('t6', $t6);
});
/** END FORM 6 **/

/** FORMULARIO 7 **/
Route::get('/cloud/form/7', function() {
    return view('cloud.7');
});

Route::post('/cloud/form/7', 't7Controller@form7');
/** END FORM 7 **/

/** FORMULARIO 8 **/
Route::get('/cloud/form/t8/{empresa_id}', function($empresa_id) {
    $t8 = App\T8::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t8')
                    ->with('t8s',$t8)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/8/{id}', function($id) {
    $empresa = App\empresa::find($id);
    return view('cloud.8')->with('empresa', $empresa);
});

Route::post('/cloud/form/8', 't8Controller@form8'); 

Route::get('/cloud/form/8/ver/{id}', function($id) {
    $t8 = App\T8::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t8Detalles')
                    ->first();
    return view('cloud.8_ver')->with('t8', $t8);
});
/** END FORM 8 **/

/** FORMULARIO 9 **/
Route::get('/cloud/form/9', function() {
    return view('cloud.9');
});

Route::post('/cloud/form/9', 't1Controller@form9'); 
/** END FORM 9 **/

/** FORMULARIO 10 **/
Route::get('/cloud/form/t10/{empresa_id}', function($empresa_id) {
    $t10 = App\T10::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t10')
                    ->with('t10s',$t10)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/10/{id}', function($id) {
    $empresa = App\empresa::find($id);
    return view('cloud.10')->with('empresa', $empresa);
});

Route::post('/cloud/form/10', 't10Controller@form10'); 

Route::get('/cloud/form/10/ver/{id}', function($id) {
    $t10 = App\T10::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t10Detalles')
                    ->first();
    return view('cloud.10_ver')->with('t10', $t10);
});

/** END FORM 10 **/

/** FORMULARIO 11 **/
Route::get('/cloud/form/11', function() {
    return view('cloud.11');
});
Route::post('/cloud/form/11', 't11Controller@form11');


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
