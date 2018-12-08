<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Users
        Permission::create([
            'name'          =>   'Crear de usuario',
            'slug'          =>   'users.create',
            'description'   =>   'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'          =>   'Navegar usuarios',
            'slug'          =>   'users.index',
            'description'   =>   'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          =>   'Ver detalle de usuario',
            'slug'          =>   'users.show',
            'description'   =>   'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'          =>   'Edición de usuario',
            'slug'          =>   'users.edit',
            'description'   =>   'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'          =>   'Eliminar usuario',
            'slug'          =>   'users.destroy',
            'description'   =>   'Eliminar cualquier usuario del sistema',
        ]);
        Permission::create([
            'name'          =>   'Deshabilitar usuario',
            'slug'          =>   'users.deshabilitar',
            'description'   =>   'Deshabilitar cualquier usuario del sistema',
        ]);
        Permission::create([
            'name'          =>   'Habilitar usuario',
            'slug'          =>   'users.habilitar',
            'description'   =>   'Habilitar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name'          =>   'Navegar roles',
            'slug'          =>   'roles.index',
            'description'   =>   'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          =>   'Ver detalle de rol',
            'slug'          =>   'roles.show',
            'description'   =>   'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'          =>   'Edición de rol',
            'slug'          =>   'roles.edit',
            'description'   =>   'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'          =>   'Crear de rol',
            'slug'          =>   'roles.create',
            'description'   =>   'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'          =>   'Eliminar rol',
            'slug'          =>   'roles.destroy',
            'description'   =>   'Eliminar cualquier rol del sistema',
        ]);

        //Products
        Permission::create([
            'name'          =>   'Navegar productos',
            'slug'          =>   'productos.index',
            'description'   =>   'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
            'name'          =>   'Ver detalle de producto',
            'slug'          =>   'productos.show',
            'description'   =>   'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
            'name'          =>   'Edición de producto',
            'slug'          =>   'productos.edit',
            'description'   =>   'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
            'name'          =>   'Crear de producto',
            'slug'          =>   'productos.create',
            'description'   =>   'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
            'name'          =>   'Eliminar producto',
            'slug'          =>   'productos.destroy',
            'description'   =>   'Eliminar cualquier producto del sistema',
        ]);
        Permission::create([
            'name'          =>   'Deshabilitar producto',
            'slug'          =>   'productos.deshabilitar',
            'description'   =>   'Deshabilitar cualquier producto del sistema',
        ]);
        Permission::create([
            'name'          =>   'Habilitar producto',
            'slug'          =>   'productos.habilitar',
            'description'   =>   'Habilitar cualquier producto del sistema',
        ]);
        
        //Empresas
        Permission::create([
            'name'          =>   'Ver detalle de empresa',
            'slug'          =>   'empresas.show',
            'description'   =>   'Ver en detalle cada empresa del sistema',
        ]);
        Permission::create([
            'name'          =>   'Edición de empresa',
            'slug'          =>   'empresas.edit',
            'description'   =>   'Editar cualquier dato de un empresa del sistema',
        ]);
        // Clientes
        Permission::create([
            'name'          =>   'Ver detalle de cliente',
            'slug'          =>   'clientes.show',
            'description'   =>   'Ver en detalle cada cliente del sistema',
        ]);
        Permission::create([
            'name'          =>   'Edición de cliente',
            'slug'          =>   'clientes.edit',
            'description'   =>   'Editar cualquier dato de un cliente del sistema',
        ]);
         //Categorias
         Permission::create([
            'name'          =>   'Navegar categorias',
            'slug'          =>   'categorias.index',
            'description'   =>   'Lista y navega todos los categorias del sistema',
        ]);
        Permission::create([
            'name'          =>   'Ver detalle de categoria',
            'slug'          =>   'categorias.show',
            'description'   =>   'Ver en detalle cada categoria del sistema',
        ]);
        Permission::create([
            'name'          =>   'Edición de categoria',
            'slug'          =>   'categorias.edit',
            'description'   =>   'Editar cualquier dato de un categoria del sistema',
        ]);
        Permission::create([
            'name'          =>   'Crear de categoria',
            'slug'          =>   'categorias.create',
            'description'   =>   'Editar cualquier dato de un categoria del sistema',
        ]);
        Permission::create([
            'name'          =>   'Eliminar categoria',
            'slug'          =>   'categorias.destroy',
            'description'   =>   'Eliminar cualquier categoria del sistema',
        ]);
        //Permisos para los clientes
        Permission::create([
            'name'          =>   'Apostar Producto',
            'slug'          =>   'productos.apuesta',
            'description'   =>   'Permite apostar un producto',
        ]);
        Permission::create([
            'name'          =>   'Vender Producto',
            'slug'          =>   'productos.venta',
            'description'   =>   'Permite finalizar la apuesta un producto',
        ]);
        Permission::create([
            'name'          =>   'Ver Perfil',
            'slug'          =>   'clientes.perfil',
            'description'   =>   'Permite permite ver el perfil del cliente',
        ]);
        
       
    }
}
