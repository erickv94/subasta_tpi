<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use App\Apuesta;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class SubastaController extends Controller
{

    public function productosSubasta()
    {
        $productos = Producto::orderBy('id_producto','DESC')
            ->where('productos.publicacion','=',true)//->where('fecha_expiracion','>',Carbon::now())
            ->paginate(6);
        $categorias = Categoria::get();
        return view('subastas.index',compact('productos','categorias'));
    }

    public function show($slug)
    {
        $producto = Producto::where('slug',$slug)->first();
        $apuesta= Apuesta::where('id_producto',$producto->id_producto)->get()->max('propuesta');
        if($apuesta)
        {
            return view('subastas.show',compact('producto','apuesta'));
        }
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



    public function apostar(Request $request){
        $precio=$request->valor;
        $idProducto=$request->id;
        $valorMax=Apuesta::where('id_producto',$idProducto)->get()->max('propuesta');
        $precioInicial=Producto::where('id_producto',$idProducto)->first()->precio_inicial;
        if($valorMax)
        {
            if((float)$valorMax<(float)$precio)
            {
                $apuesta= new Apuesta;
                $apuesta->id_producto=$idProducto;
                $apuesta->fecha_apuesta= Carbon::now();
                $apuesta->id_cliente= Auth::user()->clientes->id_cliente;
                $apuesta->propuesta= round($precio,2);
                $apuesta->save();

                return back()->with('success','Se ha colacado un nuevo valor subasta');
            }
            return back()->with('error','El precio debe ser mayor al mayor actual');
        }
        else {
            if((float)$precioInicial<(float)$precio)
            {
                $apuesta= new Apuesta;
                $apuesta->id_producto=$idProducto;
                $apuesta->fecha_apuesta= Carbon::now();
                $apuesta->id_cliente= Auth::user()->clientes->id_cliente;
                $apuesta->propuesta= round($precio,2);
                $apuesta->save();

                return back()->with('success','Se ha colacado un nuevo valor subasta');
            }
            return back()->with('error','El precio debe ser mayor al precio inicial');
        }


    }
}
