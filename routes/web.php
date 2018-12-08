<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {return view('contacto');});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verificacionUsuario');
Route::get('/productosSubasta', 'SubastaController@productosSubasta')->name('productosSubasta');
Route::get('/detalle/{slug}', 'SubastaController@show')->name('detalleProducto');
//Rutas para registro de usuarios de Empresa y Cliente
Route::get('empresas/create', 'EmpresaController@create')->name('crearEmpresa');
Route::get('clientes/create', 'ClienteController@create')->name('crearCliente');
Route::post('empresas/store', 'EmpresaController@store')->name('empresas.store');
Route::post('clientes/store', 'ClienteController@store')->name('clientes.store');

//Reset User Paasword
Route::get('users/showResetPassword', 'UserController@showResetPassword');
ROute::post('users/updatePassword','UserController@updatePassword');


//Routes

Route::middleware(['auth'])->group(function(){
    //Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
                ->middleware('permission:roles.create');
        Route::get('roles', 'RoleController@index')->name('roles.index')
                ->middleware('permission:roles.index');
        Route::get('roles/create', 'RoleController@create')->name('roles.create')
                ->middleware('permission:roles.create');
        Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
                ->middleware('permission:roles.edit');
        Route::get('roles/{slug}', 'RoleController@show')->name('roles.show')
                ->middleware('permission:roles.show');
        Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
                ->middleware('permission:roles.destroy');
        Route::get('roles/{slug}/edit', 'RoleController@edit')->name('roles.edit')
                ->middleware('permission:roles.edit');
        //Users
        Route::get('users', 'UserController@index')->name('users.index')
                ->middleware('permission:users.index');
        Route::put('users/{user}', 'UserController@update')->name('users.update')
                ->middleware('permission:users.edit');
        Route::get('users/create', 'UserController@create')->name('users.create')
                ->middleware('permission:users.create');
        Route::post('users/store', 'UserController@store')->name('users.store')
                ->middleware('permission:users.create');
        Route::get('users/{user}', 'UserController@show')->name('users.show')
                ->middleware('permission:users.show');
        Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
                ->middleware('permission:users.destroy');
        Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
                ->middleware('permission:users.edit');
       
         //Empresas
        Route::get('empresas', 'EmpresaController@index')->name('empresas.index')
                ->middleware('permission:empresas.index');
        Route::get('empresas/{empresa}', 'EmpresaController@show')->name('empresas.show')
                ->middleware('permission:empresas.show');
        Route::get('empresas/habilitar/{id}', 'EmpresaController@habilitar')->name('empresas.habilitar')
                ->middleware('permission:users.habilitar');
        Route::get('empresas/deshabilitar/{id}', 'EmpresaController@deshabilitar')->name('empresas.deshabilitar')
                ->middleware('permission:users.deshabilitar');

          //Clientes
        Route::get('clientes', 'ClienteController@index')->name('clientes.index')
               ->middleware('permission:clientes.index');
        Route::get('clientes/{role}', 'ClienteController@show')->name('clientes.show')
               ->middleware('permission:clientes.show');
        Route::get('clientes/habilitar/{id}', 'ClienteController@habilitar')->name('clientes.habilitar')
               ->middleware('permission:users.habilitar');
        Route::get('clientes/deshabilitar/{id}', 'ClienteController@deshabilitar')->name('clientes.deshabilitar')
               ->middleware('permission:users.deshabilitar');

        //Ruta para el perfil del usuario
        Route::get('/cliente/perfil','ClienteController@showProfile');

        //Categorias
        Route::post('categorias/store', 'CategoriaController@store')->name('categorias.store')
               ->middleware('permission:categorias.create');
        Route::get('categorias', 'CategoriaController@index')->name('categorias.index')
               ->middleware('permission:categorias.index');
        Route::get('categorias/create', 'CategoriaController@create')->name('categorias.create')
               ->middleware('permission:categorias.create');
        Route::put('categorias/{categoria}', 'CategoriaController@update')->name('categorias.update')
               ->middleware('permission:categorias.edit');
        Route::get('categorias/{slug}', 'CategoriaController@show')->name('categorias.show')
               ->middleware('permission:categorias.show'); //URL AMIGABLE
        Route::delete('categorias/{categoria}', 'CategoriaController@destroy')->name('categorias.destroy')
               ->middleware('permission:productos.destroy');
        Route::get('categorias/{slug}/edit', 'CategoriaController@edit')->name('categorias.edit')
               ->middleware('permission:categorias.edit');
        
        
        //Products
        Route::post('productos/store', 'ProductoController@store')->name('productos.store')
                ->middleware('permission:productos.create');
        Route::get('productos', 'ProductoController@index')->name('productos.index')
                ->middleware('permission:productos.index');
        Route::get('productos/create', 'ProductoController@create')->name('productos.create')
                ->middleware('permission:productos.create');
        Route::put('productos/{producto}', 'ProductoController@update')->name('productos.update')
                ->middleware('permission:productos.edit');
        Route::get('productos/{slug}', 'ProductoController@show')->name('productos.show')
                ->middleware('permission:productos.show'); //URL AMIGABLE
        Route::delete('productos/{producto}', 'ProductoController@destroy')->name('productos.destroy')
                ->middleware('permission:productos.destroy');
        Route::get('productos/{producto}/edit', 'ProductoController@edit')->name('productos.edit')
                ->middleware('permission:productos.edit');
        Route::get('productos/habilitar/{id}', 'ProductoController@habilitar')->name('productos.habilitar')
                ->middleware('permission:productos.habilitar');
        Route::get('productos/deshabilitar/{id}', 'ProductoController@deshabilitar')->name('productos.deshabilitar')
                ->middleware('permission:productos.deshabilitar');
        
       
        
});
