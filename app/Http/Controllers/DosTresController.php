<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosTresController extends Controller {
    public function dos() {
        $arr=[1, 100 , 1000 , 10000 , 1000000, 10000];
        return view("Varr",["arr" => $arr]);
    }
    public function tres($id = 0) {
        $arr=[1, 100 , 1000 , 10000 , 1000000];
        $valor=$arr[$id];
        return view("ARRID",["valor"=>$valor]);
    }

    public function mostrarFormulario() {
        return view('formulario');
    }
    
    public function procesarFormulario(Request $request) {
        $nombre = $request->input('nombre');
        $apellidos = $request->input('apellidos');
        return view('mostrar_datos', ['nombre' => $nombre, 'apellidos' => $apellidos]);
    }
    
}
