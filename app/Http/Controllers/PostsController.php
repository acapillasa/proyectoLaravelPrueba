<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postsController extends Controller
{
    public function ensenar($id)
    {
        return view('postsensenar', ['id' => $id]);
    }

    public function recientes($reciente) {
        return view('postrecienteshacedias', ['hace_dias' => $reciente]);
    }

}
