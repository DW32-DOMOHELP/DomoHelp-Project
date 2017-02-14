<?php

use Illuminate\Database\Seeder;
use HttpOz\Roles\Models\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$adminRole = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administradores del sistema DomoHelp', // optional
            'group' => 'admins', // optional, set as 'default' by default
        ]);
        
        $clientRole = Role::create([
            'name' => 'Client',
            'slug' => 'client',
            'description' => 'Usuarios con items ya contratados',
            'group' => 'clients',
        ]);
        
         $contactRole = Role::create([
            'name' => 'Contact',
            'slug' => 'contact',
            'description' => 'Usuarios que han contactado con nosotros para contratar items',
            'group' => 'contacts',
        ]);*/
        
        $user = User::find(1);
        $user->attachRole(1);
        
        $user = User::find(2);
        $user->attachRole(1);
        
        $user = User::find(3);
        $user->attachRole(1);
        
        $user = User::find(14);
        $user->attachRole(3);
        
        $user = User::find(15);
        $user->attachRole(2);
        
        
    }
}
