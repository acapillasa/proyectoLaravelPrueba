<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eje1VController extends Controller
{
    public function __invoke($valor = "DEFAULT") {
        return view('eje1V',['valor' => $valor]);
    }
}
