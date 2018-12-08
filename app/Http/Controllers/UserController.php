<?php

namespace App\Http\Controllers;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get()
        ->where('id','<>',2)
        ->where('id','<>',3);
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->password= bcrypt($request->password);
        $user->habilitar=true;
        $user->save();
        //actualizar roles
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.show', $user->id)
        ->with('msj','El Usuario: '.$user->name.' ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get()
        ->where('id','<>',2)
        ->where('id','<>',3);
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualizar usuario
        $user = User::findOrFail($id);
        $user->update($request->all());
        //actualizar roles
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.show', $user->id)
        ->with('msj','El Usuario: '.$user->name.' ha sido actualizado con exito');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
    
}
