<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Categoria;
use App\Producto;
use App\Empresa;
use App\User;
//Validaciones Request
use Illuminate\Http\Request;
use App\Http\Requests\ProductoStoreRequest;

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
        $categorias = Categoria::get();
        return view('productos.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoStoreRequest $request)
    {
        $user = Auth::user()->empresas;
        //Codigo es generado por la aplicación
        $cantidad = Producto::count();
        $nombre_empresa = Auth::user()->username;
        $codigo = str_slug($cantidad.' '.$request->nombre_producto. 
        ' ' . $nombre_empresa
        );
        $producto = new Producto;
        //Asignando asociaciones
        $producto->empresas()->associate($user->id_empresa);
        $producto->categorias()->associate($request->get('categorias'));
        //Asignando los valores a cada variable
        $producto->codigo = $codigo;
        $producto->nombre_producto = $request->nombre_producto;
        $producto->precio_inicial = (float) $request->precio_inicial;
        $producto->fecha_publicacion=Carbon::now();
        $producto->fecha_expiracion= $request->fecha_expiracion ;
        $producto->descripcion = $request->descripcion;
        //Slug creado con el codigo y el nombre de la categoria
        $categoria_nombre = $producto->categorias->nombre_categoria;
        $producto->slug=str_slug($codigo. ' ' . $categoria_nombre);
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
        $categorias = Categoria::get();
        return view('productos.edit',compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoStoreRequest $request, $id)
    {
        $user = Auth::user()->empresas;
        //Codigo es generado por la aplicación
        $cantidad = Producto::count();
        $nombre_empresa = Auth::user()->username;
        $codigo = str_slug($cantidad.' '.$request->nombre_producto. 
        ' ' . $nombre_empresa
        );
        $producto = Producto::findOrFail($id);
        //Asignando asociacion
        $producto->categorias()->associate($request->get('categorias'));
        //Asignando los valores a cada variable
        $producto->codigo = $codigo;
        $producto->nombre_producto = $request->nombre_producto;
        $producto->precio_inicial = (float) $request->precio_inicial;
        $producto->fecha_expiracion= $request->fecha_expiracion ;
        $producto->descripcion = $request->descripcion;
        //Slug creado con el codigo y el nombre de la categoria
        $categoria_nombre = $producto->categorias->nombre_categoria;
        $producto->slug=str_slug($codigo. ' ' . $categoria_nombre);
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
