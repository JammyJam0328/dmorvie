<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TransactionType;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionType::create([
            'name' => 'Check_in',
        ]);
        TransactionType::create([
            'name' => 'Deposit',
        ]);
        TransactionType::create([
            'name' => 'Extend',
        ]);
        TransactionType::create([
            'name' => 'Kitchen',
        ]);
    }
}
