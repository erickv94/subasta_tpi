<?php

namespace App\Http\Controllers;
use App\User;
use App\Empresa;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
//Validaciones Request
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaStoreRequest;


class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $empresas= DB::table('role_user')->join('users','users.id','=','role_user.user_id')
        ->join('empresas','users.id','=','empresas.id_user')
        ->where('role_id', '=', 3)
        ->where('users.id','<>',$user->id)
        ->orderBy('users.id','DESC')
        ->paginate(10);
        return view('empresas.index',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaStoreRequest $request)
    {
        $user = User::create($request->all());
        $user->password= bcrypt($request->password);
        $user->email_verified_at = Carbon::now();
        $user->save();
        //Se guarda en la relaciòn muchos a muchos de la tabla role_user
        $user->roles()->attach(3);
        // Se guarda en la tabla Empresa
        $empresa = new Empresa();
        $empresa->forma_juridica = $request->forma_juridica;
        $empresa->rubro = $request->rubro;
        $empresa->id_user = $user->id;
        $empresa->save();
        return redirect()->route('login')->with('info','Pronto lo contactaremos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('empresas.show',compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        return redirect()->action('EmpresaController@index')->with('msj2','El perfil de la empresa '.$user->name.' ha sido deshabilitado');
        
    }
    
    public function habilitar($id)
    {
        $user = User::findOrFail($id);
        $user->habilitar=true;
        $user->save();
        return redirect()->action('EmpresaController@index')->with('msj','El perfil de la empresa '.$user->name.' ha sido habilitado');
    }

    
}
