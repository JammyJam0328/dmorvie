<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DesignationAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'BA-D’Morvie Suites Recto',
            'email' => 'dmsr@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => 2,
            'branch_id' => 12,
        ]);

        User::create([
            'name' => 'KA-’Morvie Suites Recto',
            'email' => 'kioskdmsr@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => 4,
            'branch_id' => 12,
        ]);
    }
}
