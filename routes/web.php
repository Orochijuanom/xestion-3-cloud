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
    return view('auth.login');
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


//Ruta que muestra las empresas del usuario
Route::get('/cloud/form/l1', function() {
    $empresas = App\Empresa::all();    
    return view('cloud.l1')->with('empresas',$empresas);
});

/** CARGO **/
    Route::get('/cloud/form/tcargo/{empresa_id}', function($empresa_id) {
        $cargo = App\Cargo::where('empresa_id', '=', $empresa_id)->get();
        return view('cloud.tcargo')
                        ->with('cargos', $cargo)
                        ->with('empresa_id', $empresa_id);
    });

    Route::get('/cloud/form/cargo/{id}', function($id) {
        $empresa = App\Empresa::find($id);
        return view('cloud.cargo')->with('empresa', $empresa);
    });

    Route::post('/cloud/form/cargo', 'cargoController@cargo');

    Route::get('/cloud/form/cargo/ver/{id}', function($id) {
        $cargo = App\Cargo::where('id',  '=', $id)
                        ->with('empresa')
                        ->first();
        return view('cloud.cargo_ver')->with('cargo', $cargo);
    });

    Route::put('/cloud/form/cargo/{id}', 'cargoController@edit');

/** ENDCARGO **/

/** FORMULARIO 1 **/

    //Ruta que muestra los formularios T1 creados por el usuario
    Route::get('/cloud/form/t1/{empresa_id}', function($empresa_id) {
        $t1 = App\T1::where('empresa_id','=',$empresa_id)->get();  
         
        
        return view('cloud.t1')
                        ->with('t1s',$t1)
                        ->with('empresa_id',$empresa_id);
    });
    
    Route::get('/cloud/form/1/ver/{id}', function($id) {
        $t1 = App\T1::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('T1Detalles')
                    ->first();
        $t11s = App\T11::where('empresa_id', '=', $t1->empresa->id)->get();
        return view('cloud.1_ver')->with(['t1' => $t1, 't11s' => $t11s]);
    });

    //Ruta que carga el formulario para registrar la información
    Route::get('/cloud/form/1/{id}', function($id) {
        $empresa = App\Empresa::find($id);        
        $t11 = App\T11::where('empresa_id', '=', $empresa->id)->get();
        return view('cloud.1')->with(['empresa' => $empresa, 't11s' => $t11]);
                                
    });
    //Ruta post que guarda la información
    Route::post('/cloud/form/1', 't1Controller@form1'); 
    Route::put('/cloud/form/1/ver/', 't1Controller@edit');

/** END FORM 1 **/

/** FORMULARIO 2 **/
Route::get('/cloud/form/t2/{empresa_id}', function($empresa_id) {
    $t2 = App\T2::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t2')
                    ->with('t2s',$t2)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/2/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    $empleados = App\Empleados::where('empresa_id', '=', $empresa->id)->with('cargos')->get();
    $cargos = App\Cargo::where('empresa_id', '=', $empresa->id)->get();
    return view('cloud.2')->with(['empresa' => $empresa, 'empleados' => $empleados, 'cargos' => $cargos]);
});




Route::get('/cloud/form/2/ver/{id}', function($id) {
    $t2 = App\T2::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t2Detalles')
                    ->with('t2Notas')
                    ->with('responsable_planificacion')
                    ->with('responsable_revision_presupuesto_primer_s')
                    ->with('responsable_revision_presupuesto_segundo_s')
                    ->first();
    $empleados = App\Empleados::where('empresa_id', '=', $t2->empresa->id)->get();                
    return view('cloud.2_ver')->with(['t2' => $t2, 'empleados' => $empleados]);
});

Route::put('/cloud/form/2/ver/', 't2Controller@edit');
Route::post('/cloud/form/2', 't2Controller@form2'); 
/** END FORM 2 **/



/** FORMULARIO 3 **/
    //Ruta que muestra los formularios T3 creados por el usuario
    Route::get('/cloud/form/t3/{empresa_id}', function($empresa_id) {
        $t3 = App\T3::where('empresa_id','=',$empresa_id)->get();    
        return view('cloud.t3')
                        ->with('t3s',$t3)
                        ->with('empresa_id',$empresa_id);
    });

    Route::get('/cloud/form/3/ver/{id}', function($id) {
        $t3 = App\T3::where('id',  '=', $id)
                        ->with('empresa')
                        ->with('detalles')                    
                        ->first();
        $empleados = App\Empleados::where('empresa_id', '=', $t3->empresa->id)->get();                
        return view('cloud.3_ver')->with(['t3' => $t3, 'empleados' => $empleados]);
    });


    Route::get('/cloud/form/3/{id}', function($id) {
        $empresa = App\Empresa::find($id);
        $empleados = App\Empleados::where('empresa_id', '=', $empresa->id)->get();
        return view('cloud.3')->with(['empresa' => $empresa, 'empleados' => $empleados]);
    });

    Route::post('/cloud/form/3', 't3Controller@form3');
    Route::put('/cloud/form/3/ver', 't3Controller@edit');
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
Route::get('/cloud/form/t5/{empresa_id}', function($empresa_id) {
        $t5 = App\T5::where('empresa_id','=',$empresa_id)->get();    
        return view('cloud.t5')
                        ->with('t5s',$t5)
                        ->with('empresa_id',$empresa_id);
    });

Route::get('/cloud/form/5/ver/{id}', function($id) {
    $t5 = App\T5::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('T5Detalles')                    
                    ->first();
    $empleados = App\Empleados::where('empresa_id', '=', $t5->empresa->id)->get();                
    return view('cloud.5_ver')->with(['t5' => $t5, 'empleados' => $empleados]);
});

Route::get('/cloud/form/5/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    return view('cloud.5')
        ->with('empresa',$empresa);
});

Route::post('/cloud/form/5', 't5Controller@form5');
Route::put('/cloud/form/5/ver', 't5Controller@edit'); 
/** END FORM 5 **/

/** FORMULARIO 6 **/
Route::get('/cloud/form/t6/{empresa_id}', function($empresa_id) {
    $t6 = App\T6::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t6')
                    ->with('t6s',$t6)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/6/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    $empleados = App\Empleados::where('empresa_id', '=', $empresa->id)->get();
    return view('cloud.6')->with(['empresa' => $empresa, 'empleados' => $empleados]);
});

Route::post('/cloud/form/6', 't6Controller@form6'); 

Route::get('/cloud/form/6/ver/{id}', function($id) {
    $t6 = App\T6::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t6Detalles')
                    ->first();
    $empleados = App\Empleados::where('empresa_id', '=', $t6->empresa->id)->get();
    return view('cloud.6_ver')->with(['t6' => $t6, 'empleados' => $empleados]);
});

Route::put('/cloud/form/6/ver', 't6Controller@edit'); 
/** END FORM 6 **/

/** FORMULARIO 7 **/
Route::get('/cloud/form/t7/{empresa_id}', function($empresa_id) {
    $t7 = App\T7::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t7')
                    ->with('t7s',$t7)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/7/ver/{id}', function($id) {
    $t7 = App\T7::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('T7Detalles')                    
                    ->first();
    $empleados = App\Empleados::where('empresa_id', '=', $t7->empresa->id)->get();                
    return view('cloud.7_ver')->with(['t7' => $t7, 'empleados' => $empleados]);
});

Route::get('/cloud/form/7/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    return view('cloud.7')->with('empresa',$empresa);
});

Route::post('/cloud/form/7', 't7Controller@form7');
Route::put('/cloud/form/7/ver', 't7Controller@edit');
/** END FORM 7 **/

/** FORMULARIO 8 **/
Route::get('/cloud/form/t8/{empresa_id}', function($empresa_id) {
    $t8 = App\T8::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t8')
                    ->with('t8s',$t8)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/8/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    $empleados = App\Empleados::where('empresa_id', '=', $empresa->id)->get();
    return view('cloud.8')->with(['empresa' => $empresa, 'empleados' => $empleados]);
});

Route::post('/cloud/form/8', 't8Controller@form8'); 

Route::get('/cloud/form/8/ver/{id}', function($id) {
    $t8 = App\T8::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t8Detalles')
                    ->first();
    $empleados = App\Empleados::where('empresa_id', '=', $t8->empresa->id)->get();
    return view('cloud.8_ver')->with(['t8' => $t8, 'empleados' => $empleados]);
});

Route::put('/cloud/form/8/ver', 't8Controller@edit');
/** END FORM 8 **/

/** FORMULARIO 9 **/

Route::get('/cloud/form/t9/{empresa_id}', function($empresa_id) {
    $t9 = App\T9::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t9')
                    ->with('t9s',$t9)
                    ->with('empresa_id',$empresa_id);
});


Route::get('/cloud/form/9/{id}', function($id) {
    $empresa = App\Empresa::find($id); 
    $cargos = App\Cargo::where('empresa_id', '=', $empresa->id)->get();
    return view('cloud.9')->with('empresa',$empresa)
                            ->with('cargos',$cargos);
});

Route::get('/cloud/form/9/ver/{id}', function($id) {
    $t9 = App\T9::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('detalles')
                    ->first();
    $cargos = App\Cargo::where('empresa_id', '=', $t9->empresa->id)->get();
    return view('cloud.9_ver')->with(['t9' => $t9, 'cargos' => $cargos]);
});


Route::post('/cloud/form/9', 't9Controller@form9'); 
Route::put('/cloud/form/9/ver', 't9Controller@edit');
/** END FORM 9 **/

/** FORMULARIO 10 **/
Route::get('/cloud/form/t10/{empresa_id}', function($empresa_id) {
    $t10 = App\T10::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t10')
                    ->with('t10s',$t10)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/10/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    $empleados = App\Empleados::where('empresa_id', '=', $empresa->id)->get();
    return view('cloud.10')->with(['empresa' => $empresa, 'empleados' => $empleados]);
});

Route::post('/cloud/form/10', 't10Controller@form10'); 

Route::get('/cloud/form/10/ver/{id}', function($id) {
    $t10 = App\T10::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t10Detalles')
                    ->first();
    $empleados = App\Empleados::where('empresa_id', '=', $t10->empresa->id)->get();
    return view('cloud.10_ver')->with(['t10' => $t10, 'empleados' => $empleados]);
});
Route::put('/cloud/form/10/ver', 't10Controller@edit');
/** END FORM 10 **/

/** FORMULARIO 11 **/
Route::get('/cloud/form/t11/{empresa_id}', function($empresa_id) {
    $t11 = App\T11::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t11')
                    ->with('t11s',$t11)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/11/ver/{id}', function($id) {
    $t11 = App\T11::where('id',  '=', $id)
                ->with('empresa')
                ->with('T11Detalle')
                ->first();
    return view('cloud.11_ver')->with('t11', $t11);
});

Route::get('/cloud/form/11/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    $empleados = App\Empleados::where('empresa_id', '=', $empresa->id)->get();
    return view('cloud.11')->with(['empresa' => $empresa, 'empleados' => $empleados]);
});

Route::post('/cloud/form/11', 't11Controller@form11'); 
Route::put('/cloud/form/11/ver', 't11Controller@edit');
/** END FORM 11 **/

/** FORMULARIO 12 **/
Route::get('/cloud/form/t12/{empresa_id}', function($empresa_id) {
    $t12 = App\T12::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t12')
                    ->with('t12s',$t12)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/12/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    $cargos = App\Cargo::where('empresa_id', '=', $empresa->id)->get();
    return view('cloud.12')->with(['empresa' => $empresa, 'cargos' => $cargos]);
});

Route::post('/cloud/form/12', 't12Controller@form12'); 
Route::put('/cloud/form/12/ver', 't12Controller@edit');

Route::get('/cloud/form/12/ver/{id}', function($id) {
    $t12 = App\T12::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t12Detalles')
                    ->first();
    $cargos = App\Cargo::where('empresa_id', '=', $t12->empresa->id)->get();
    return view('cloud.12_ver')->with(['t12' => $t12, 'cargos' => $cargos]);
});
/** END FORM 12 **/

/** FORMULARIO 12-1 **/
Route::get('/cloud/form/t12-1/{empresa_id}', function($empresa_id) {
    $t12_1 = App\T12_1::where('empresa_id','=',$empresa_id)->get();    
    return view('cloud.t12-1')
                    ->with('t12_1s',$t12_1)
                    ->with('empresa_id',$empresa_id);
});

Route::get('/cloud/form/12-1/{id}', function($id) {
    $empresa = App\Empresa::find($id);
    $empleados = App\Empleados::where('empresa_id', '=', $empresa->id)->get();
    $t12s = App\T12::where('empresa_id', '=', $empresa->id)->get();
    return view('cloud.12-1')->with(['empresa' => $empresa, 'empleados' => $empleados, 't12s' => $t12s]);
});

Route::post('/cloud/form/12-1', 't12_1Controller@form12_1'); 

Route::get('/cloud/form/12-1/ver/{id}', function($id) {
    $t121 = App\T12_1::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('t12_1Detalles')
                    ->first();
                    
    $t12s = App\T12::where('empresa_id', '=', $t121->empresa_id)->get();
    $empleados = App\Empleados::where('empresa_id', '=', $t121->empresa->id)->get();
    return view('cloud.12-1_ver')->with(['t121' => $t121, 'empleados' => $empleados , 't12s' => $t12s]);
});
/** END FORM 12-1 **/

/** FORMULARIO 13 **/
    Route::get('/cloud/form/t13/{empresa_id}', function($empresa_id) {
        $empleados = App\Empleados::where('empresa_id','=',$empresa_id)->get();    
        return view('cloud.t13')
                        ->with('empleados',$empleados)
                        ->with('empresa_id',$empresa_id);
    });
    
    Route::get('/cloud/form/13/ver/{id}', function($id) {
        $t13 = App\Empleados::where('id',  '=', $id)
                    ->with('empresa')
                    ->with('cargos')
                    ->first();
        $cargos = App\Cargo::where('empresa_id', '=', $t13->empresa->id)->get();
        return view('cloud.13_ver')->with(['t13'=> $t13, 'cargos'=>$cargos]);
    });

    Route::get('/cloud/form/13/{id}', function($id) {
        $empresa = App\Empresa::find($id);
        $cargos = App\Cargo::where('empresa_id', '=', $empresa->id)->get();
        return view('cloud.13')->with(['empresa' => $empresa, 'cargos' => $cargos]);
    });

    Route::post('/cloud/form/13/ver/', 'EmpleadosController@edit');
    Route::post('/cloud/form/13', 'EmpleadosController@crearempleado'); 
/** END FORM 13 **/



Auth::routes();

Route::get('/home', 'HomeController@index');
