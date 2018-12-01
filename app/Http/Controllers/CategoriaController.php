<?php

namespace App\Http\Controllers;
use App\Categoria;
//Validaciones Request
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaStoreRequest;
use App\Http\Requests\CategoriaUpdateRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaStoreRequest $request)
    {
        $categoria = new Categoria();
        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->slug=str_slug($request->nombre_categoria);
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect()->route('categorias.show', $categoria->slug)
            ->with('info', 'Categoria guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categoria = Categoria::where('slug',$slug)->first();
        return view('categorias.show', compact('categoria'))
        ->with('msj','La categoria: '.$categoria->nombre_categoria.' ha sido guardado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $categoria = Categoria::where('slug',$slug)->first();

        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaUpdateRequest $request, Categoria $categoria)
    {
        
        $categoria= Categoria::findOrFail($categoria->id_categoria);
        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->slug=str_slug($request->nombre_categoria);
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
       
        return redirect()->route('categorias.show', $categoria->slug)
        ->with('msj','La categoria: '.$categoria->nombre_categoria.' ha sido modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria = Categoria::findOrFail($categoria->id)->delete();
        return back()->with('msj', 'Eliminado correctamente');
    }
}
