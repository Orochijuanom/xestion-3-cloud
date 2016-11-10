<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function update(Request $request, $user_id){
     $this->validate($request,[

            'name' => 'required',
            'email' => 'required',
            'admin' => 'required',
            'activo' => 'required'
            ]);
            
    $user = User::find($user_id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->admin = $request->admin;
    $user->celular = $request->celular;
    $user->ver = $request->ver;
    $user->estado = $request->estado;
    $user->activo = $request->activo;
    $user->save();
    
    return redirect()->back()->withMessage('Usuario editado');
    }
}
