<?php

namespace App\Http\Controllers;
use App\User;
use App\Cliente;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
//Validaciones Request
use Illuminate\Http\Request;
use App\Http\Requests\ClienteStoreRequest;
use Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $clientes= DB::table('role_user')->join('users','users.id','=','role_user.user_id')
        ->join('clientes','users.id','=','clientes.id_user')
        ->where('role_id', '=', 2)
        ->where('users.id','<>',$user->id)
        ->orderBy('users.id','DESC')
        ->select('users.*','clientes.*')
        ->paginate(10);
        return view('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteStoreRequest $request)
    {
        $user = User::create($request->all());
        $user->password= bcrypt($request->password);
        $user->email_verified_at = Carbon::now();
        $user->habilitar = true;
        $user->save();
        //Se guarda en la relaciòn muchos a muchos de la tabla role_user
        $user->roles()->attach(2);
        // Se guarda en la tabla Cliente
        $cliente = new Cliente();
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->telefono = $request->telefono;
        $cliente->id_user = $user->id;
        $cliente->save();
        return redirect()->route('login')->with('info','Ingrese a su cuenta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('clientes.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::findOrFail($id);
        return view('clientes.edit',compact('user'));
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
        $user = User::findOrFail($id);
        $user->update($request->all());
        $cliente = Cliente::findOrFail($user->clientes->id_cliente);
        $cliente->update($request->all());
        return redirect()->route('clientes.show',$user->id)
        ->with('msj','Perfil actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function deshabilitar($id)
    {
        $user = User::findOrFail($id);
        $user->habilitar=false;
        $user->save();
        return redirect()->action('ClienteController@index')->with('msj2','El perfil del cliente '.$user->name.' ha sido deshabilitado');
        
    }
    
    public function habilitar($id)
    {
        $user = User::findOrFail($id);
        $user->habilitar=true;
        $user->save();
        return redirect()->action('ClienteController@index')->with('msj','El perfil del cliente '.$user->name.' ha sido habilitado');
    }
    public function showResetPassword(User $user)
    {

        return view('clientes.reset-password', compact('user'));
    }

    public function updatePassword(Request $request, $id){
       
        $user=User::findOrFail($id);
        $almacenada=$user->password;
        $recibida=$request->old_password;
        if (Hash::check($recibida, $almacenada)) {
          $nueva_password=$request->new_password;
          $user->password=bcrypt($nueva_password);
          $user->save();
          return redirect()->action('ClienteController@show',['id' => $user->id])->with('msj','la contraseña ha sido modificada con éxito');
        }else{
          return redirect()->action('ClienteController@show',['id' => $user->id])->with('msj2','La contraseña anterior está incorrecta, intentelo nuevamente');
        }
        
    }

   
}
