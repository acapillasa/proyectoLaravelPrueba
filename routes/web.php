<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\eje1VController;
use App\Http\Controllers\DosTresController;
use App\Http\Controllers\formController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
    
    Route::resource('/productos', ProductoController::class);
});*/

Route::get('/', function () {
    return view('homeindex');
})->name('home.index');
Route::get('contacto', function() {
    return view('homecontacto');
})->name('home.contacto');

/*Route::get('/post-recientes/{hace_dias?}', function($hace_dias = 1) {
    return view('postrecienteshacedias');
})->where('hace_dias','[0-9]+')->name('post.recientes.index');

Route::get('/posts/{id}', function($id) {
    return view('postsensenar');
})->where('id','[a-zA-Z]')->name('posts.ensenar');*/


Route::name('posts.')->group(function() {
    /*Route::get('/post-recientes/{hace_dias?}', function($hace_dias = 1) {
        return view('postrecienteshacedias');
    })->where('hace_dias','[0-9]+')->name('index');*/

    /*Route::get('/posts/{id}', function($id) {
        return view('postsensenar');
    })->where('id','[a-zA-Z]')->name('ensenar');*/

    Route::get('/post-recientes/{hace_dias?}', [PostsController::class,'recientes'])
        ->where('hace_dias','[0-9]+')
        ->name('recientes');
    
    Route::get('/posts/{id}', [PostsController::class,'ensenar'])
        ->where('id','[a-zA-Z]')
        ->name('ensenar');
});

// EJERCICIO VISTAS
// 1º Ejercicio
/*Route::get("/eje1V/{VALOR?}" , function($valor="DEFAULT"){
    
    return view('eje1V')->with('valor' , "ESTE ES VALOR: ".$valor);
});*/

// 1º con controlador invokable
Route::get("/eje1V/{VALOR?}" , eje1VController::class);

// 2º Ejercicio
/*Route::get("/arr" , function(){
    $arr=[1, 100 , 1000 , 10000 , 1000000];
    return view('Varr')->with('arr' , $arr);
});*/

// 2º con controlador
//Route::get("/arr", [DosTresController::class,"dos"]);

// 3º Ejercicio
/*Route::get("/arrid/{id?}" , function($id=0){
    $arr=[1, 100 , 1000 , 10000 , 1000000];
    $valor=$arr[$id];
    return view('ARRID')->with('valor' , $valor);
});*/

// 3º con controlador
//Route::get("/arrid/{id?}", [DosTresController::class,"tres"]);

// 2º y 3º con group
Route::prefix('grupo')->group(function () {
    Route::get('arr', [DosTresController::class, 'dos']);
    Route::get('arrid/{id?}', [DosTresController::class, 'tres']);
});
// Route::Controller(DosTresController::class)->group(function () {})

// 4º Ejercicio
Route::get("/ifarr" , function(){
    $arr=[1, 100 , 1000 , 10000 , 1000000,1, 100 , 1000 , 10000 , 1000000];
    
    return view('ifV')->with('arr' , $arr);
});


// 3. Crea un formulario para pedir nombre y apellidos al usuario y que esto se muestre por pantalla.
Route::get('/formulario', [DosTresController::class, 'mostrarFormulario']);
Route::post('/procesar-formulario', [DosTresController::class, 'procesarFormulario']);


// APP
Route::get("/vista1",[formController::class, "vista1"]);

Route::get("/vista2",[formController::class,"vista2"]);

Route::get("/vista3",[formController::class,"vista3"]);
Route::post("/vista3",[formController::class,"vista3ConDatos"]);

Route::post("/vista4",[formController::class,"vista4"]);


