<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;

class SubastaController extends Controller
{
    
    public function productosSubasta()
    {
        $productos = Producto::orderBy('id_producto','DESC')
            ->where('productos.publicacion','=',true)
            ->paginate(6);
        $categorias = Categoria::get();
        return view('subastas.home',compact('productos','categorias'));
    }

    public function show($slug)
    {
        $producto = Producto::where('slug',$slug)->first();
        return view('subastas.show',compact('producto'));
    }
}
