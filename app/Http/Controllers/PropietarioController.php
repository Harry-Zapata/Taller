<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function home()
    {
        $propietario = Propietario::all();
        return view('home',['propietario'=>$propietario]);
    }
    public function vistaadd(){
        return view('add');
    }
    public function add(Request $request){
        $this->validate($request,[
            'nombre'=>'required',
            'documento'=>'required']);
            $propietario = new Propietario();
            $propietario->nombre=$request->input('nombre');
            $propietario->documento=$request->input('documento');
            $propietario->direccion=$request->input('direccion');
            $propietario->telefono=$request->input('telefono');
            $propietario->email=$request->input('email');
            $propietario->save();
            return redirect('/home')->with('info','Propietario Guardado');
    }

    public function borrar($id){
        $propietario = Propietario::findOrFail($id);
        $propietario->delete();
        return redirect('/home')->with('info','Propietario Eliminado');
    }
}
