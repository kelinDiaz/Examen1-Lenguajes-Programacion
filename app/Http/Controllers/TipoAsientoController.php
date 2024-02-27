<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class TipoAsientoController extends Controller
{
    //


    
    public function inicio(){


        return view('inicio');
        }
    public function index(){
        $tipoAsientos = TipoAsiento::all();
    return view('tiposAsientos', compact('tipoAsientos'));
    }

    public function agregar(){
        return view('agregarTipoAsiento');
        }
      

public function guardar(Request $request){
    $TipoAsientos = new TipoAsiento();
    $TipoAsientos->descripcion = $request->input('descripcion');
    $TipoAsientos->precio = $request->input('precio');
    $TipoAsientos->estado = $request->input('estado');
    $TipoAsientos->save();
  
$TipoAsientos = TipoAsiento::all();
 return view('/');
     


}


}