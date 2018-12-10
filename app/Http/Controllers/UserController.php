<?php

namespace App\Http\Controllers;
use App\User;
use App\Empresa;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;
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
        ->with('msj','El Usuario: '.$user->name.' ha sido actualizado con exito');
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

    public function showProfile($id)
    {
        $user = User::find($id);
        return view('users.perfil', compact('user'));
    }
    public function editProfile(User $user)
    {
        return view('users.editPerfil', compact('user'));
    }
    public function updateProfile(Request $request, $id)
    {
        //actualizar usuario
        $user = User::findOrFail($id);
        $user->update($request->all());
        if($user->empresa){
        $empresa = Empresa::findOrFail($user->empresas->id_empresa);
        $empresa->update($request->all());
        }
        
        return redirect()->action('UserController@showProfile',['id' => $id])
        ->with('msj','Perfil Actualizado con exito');

    }

    public function showResetPassword(User $user)
    {

        return view('users.reset-password', compact('user'));
    }

    public function updatePassword(Request $request, $id){
      
        $user=User::findOrFail($id);
        $almacenada=$user->password;
        $recibida=$request->old_password;
        if (Hash::check($recibida, $almacenada)) {
          $nueva_password=$request->new_password;
          $user->password=bcrypt($nueva_password);
          $user->save();
          return redirect()->action('UserController@showProfile',['id' => $user->id])->with('msj','la contraseña ha sido modificada con éxito');
        }else{
          return redirect()->action('UserController@showProfile',['id' => $user->id])->with('msj2','La contraseña anterior está incorrecta, intentelo nuevamente');
        }
        
    }
}

