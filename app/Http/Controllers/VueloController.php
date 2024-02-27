<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    //

public function mostrar() {
    return view('vuelos');


}

public function guardar(Request $request){
    $vuelo = new Vuelo();
    $vuelo->numero = $request->input('numero');
    $vuelo->origen = $request->input('origen');
    $vuelo ->destino = $request->input('destino');
     $vuelo->save();
  

 return view('/');
}
}

