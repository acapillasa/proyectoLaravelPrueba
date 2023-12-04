<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller {
    public function vista1() {
        return view("vista1");
    }

    public function vista2() {
        return view("vista2");
    }

    public function vista3() {
        return view("vista3");
    }

    public function vista3ConDatos(Request $request) {
        $nombre = $request->input('nombre');
        $apellidos = $request->input('apellidos');
        return view("vista3",["nombre" => $nombre, "apellidos" => $apellidos]);
    }

    public function vista4(Request $request) {
        $edad = $request->input("edad");
        $oculto = $request->input("oculto");

        return view("vista4",["edad" => $edad,"oculto" => $oculto]);
    }
}
