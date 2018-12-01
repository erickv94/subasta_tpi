<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Categoria;
use App\Producto;
use App\Empresa;
use App\User;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->empresas;
        $productos = Producto::orderBy('id_producto','DESC')
            ->where('productos.id_empresa','=',$user->id_empresa)
            ->paginate(10);
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all()->pluck('nombre_categoria','id_categoria');
        return view('productos.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->empresas;
        $producto = new Producto;
        $producto->codigo = $request->codigo;
        $producto->nombre_producto = $request->nombre_producto;
        $producto->slug=str_slug($request->nombre_producto. ' ' . $request->codigo);
        $producto->precio_inicial = (float) $request->precio_inicial;
        $producto->fecha_publicacion=Carbon::now();
        $producto->fecha_expiracion= $request->fecha_expiracion ;
        $producto->descripcion = $request->descripcion;
        $producto->empresas()->associate($user->id_empresa);
        $producto->categorias()->associate($request->get('categorias'));
        $producto->save();
        return redirect()->route('productos.show',$producto->slug)
            ->with('msj','El producto: '.$producto->nombre_producto.' ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $producto = Producto::where('slug',$slug)->first();
        return view('productos.show',compact('producto'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all()->pluck('nombre_categoria','id_categoria');
        return view('productos.edit',compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user()->empresas;
        $producto = Producto::findOrFail($id);
        $producto->codigo = $request->codigo;
        $producto->nombre_producto = $request->nombre_producto;
        $producto->slug=str_slug($request->nombre_producto. ' ' . $request->codigo);
        $producto->precio_inicial = (float) $request->precio_inicial;
        $producto->fecha_expiracion= $request->fecha_expiracion ;
        $producto->descripcion = $request->descripcion;
        $producto->categorias()->associate($request->get('categorias'));
        $producto->update();
        return redirect()->route('productos.show',$producto->slug)
                ->with('info','Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('msj2','Eliminado con éxito');
    }
    public function deshabilitar($id)
    {
        
        $producto = Producto::findOrFail($id);
        $producto->publicacion=false;
        $producto->save();
        return redirect()->action('ProductoController@index')->with('msj2','El producto: '.$producto->nombre_producto.' ha sido bloqueado');
        
    }
    
    public function habilitar($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->publicacion=true;
        $producto->save();
        return redirect()->action('ProductoController@index')->with('msj','El producto: '.$producto->nombre_producto.' ha sido publicado');
    }

}
