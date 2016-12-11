<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;

class cargoController extends Controller
{
    public function cargo(Request $request){
         $this->validate($request, [
            'cargo' => 'required'
        ]);

        $cargo = Cargo::create([
            'cargo' => $request['cargo'],
            'empresa_id' => $request['empresa_id']

        ]);

        return redirect()->back()->with('flash_message', 'Se ha creado el registro exitosamente');   
    }

    public function edit(Request $request, $id){
        $this->validate($request, [
            'cargo' => 'required'
        ]);

        $cargo = Cargo::find($id);
        $cargo->cargo = $request['cargo'];
        $cargo->save();

        return redirect()->back()->with('flash_message', 'Se ha editado el registro exitosamente');   
    }
}
 