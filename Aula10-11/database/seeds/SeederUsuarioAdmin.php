<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeederUsuarioAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = User::create(['name' => 'Leandro ramos silva' ,
                             'email' => 'leandro.teste@teste.com' ,
                             'password' => bcrypt('S3nhaSecret@')
                             ]);

                $role = Role::create(['name' => 'Admin']);
                $permissions = Permission::pluck('id','id')->all();
                $role->syncPermissions($permissions);
                $user->assingRole([$role->id]);
}
}
