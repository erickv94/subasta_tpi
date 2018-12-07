<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //Modificación del metodo para que entre solamente si tiene varios roles 
    //eso significaria que tiene administracion
    public function redirectPath()
    {
        $conteo =DB::table('role_user')
        ->where('user_id', '=', auth()->user()->id)
        ->where('role_id', '=', 3)
        ->count();
        if($conteo == 1){
            return '/home';
        }
        return '/';
    }
}
