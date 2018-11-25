<?php

namespace App\Http\Controllers;
use App\User;
use App\Empresa;
use App\Cliente;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createEmpresa()
    {
        return view('empresas.create');
    }
    public function createCliente()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $now = new \DateTime();
        $user = new User;
        $user->name = $request->name;
        $user->username=$request->username;
        $user->password= bcrypt($request->password);
        $user->email = $request->email;
        $user->email_verified_at = $now;
        $user->save();

        $user->roles()->attach($request->role_id);
        if($request->role_id == 2){
            $cliente = new Cliente();
            $cliente->fecha_nacimiento = $request->fecha_nacimiento;
            $cliente->telefono = $request->telefono;
            $cliente->direccion = $request->direccion;
            $cliente->id_user = $user->id;
            $cliente->habilitar = true;
            $cliente->save();
            return redirect()->route('login')->with('info','Ingrese a su cuenta');
        }else{
            $empresa = new Empresa();
            $empresa->denominacion = $request->denominacion;
            $empresa->rubro = $request->rubro;
            $empresa->id_user = $user->id;
            $empresa->habilitar = false;
            $empresa->save();
            return redirect()->route('login')->with('info','Revise su correo electronico para confirmación');
        }
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
        $roles = Role::get();
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
        $user = User::find($id);
        $user->update($request->all());
        //actualizar roles
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario actualizado con éxito');
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
