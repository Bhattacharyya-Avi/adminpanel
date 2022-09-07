<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'Admin')->first();
        $role->permissions()->sync(Permission::get()->pluck('id'));

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt(12345),
            'role_id'=>$role->id,
        ]);
    }
}
