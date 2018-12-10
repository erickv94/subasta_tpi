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
        return view('subastas.index',compact('productos','categorias'));
    }

    public function show($slug)
    {
        $producto = Producto::where('slug',$slug)->first();
        return view('subastas.show',compact('producto'));
    }

    public function search(Request $request)
    {
        $idCategoria=$request->categorias;
        $palabra=$request->palabra;
        //query change when it has a category

        if($idCategoria)
        {
            Categoria::findOrFail($idCategoria);

            $productos=Producto::where('nombre_producto','ilike','%'.$palabra.'%')->where('id_categoria',$idCategoria)->paginate(6);

            return view('subastas.search',compact('productos'));
        }
        //when you dont select a category, it's going to search in the products model directly
        $productos=Producto::where('nombre_producto','ilike','%'.$palabra."%")->paginate(6);

        return view('subastas.search',compact('productos'));
    }
}
