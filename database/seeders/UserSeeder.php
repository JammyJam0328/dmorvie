<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{User,Role};
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Role::create([
            'name'=>'Super Admin',
        ]);

        Role::create([
            'name'=>'Branch Admin',
        ]);

        Role::create([
            'name'=>'Front Desk',
        ]);

        Role::create([
            'name'=>'Kiosk Account',
        ]);

        Role::create([
            'name'=>'Kitchen',
        ]);

        Role::create([
            'name'=>'Bill Boy',
        ]);

        Role::create([
            'name'=>'Human Resource',
        ]);

        User::create([
            'role_id'=>1,
            'name'=>'Super Admin',
            'email'=>'superadmin@gmail.com',
            'password'=>bcrypt("superadmin")
        ]);
        
    }
}
