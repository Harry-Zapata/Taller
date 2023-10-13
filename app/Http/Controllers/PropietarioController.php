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


    public function update($id){
        $propietario = Propietario::find($id);
        return view('update',['propietario'=>$propietario]);
    }
    public function edit(Request $request,$id){
        $this->validate($request,[
            'nombre'=>'required',
            'documento'=>'required']);
            $data = array(
            'nombre'=>$request->input('nombre'),
            'documento'=>$request->input('documento'),
            'direccion'=>$request->input('direccion'),
            'telefono'=>$request->input('telefono'),
            'email'=>$request->input('email'),
            );
            Propietario::where('id',$id)->update($data);
            return redirect('/home')->with('info','Propietario Actualizado');
    }

    public function read($id){
        $propietario = Propietario::find($id);
        return view('read',['propietario'=>$propietario]);
    }

    public function delete($id){
        Propietario::where('id',$id)->delete();
        return redirect('/home')->with('info','Propietario Eliminado');
    }
}

