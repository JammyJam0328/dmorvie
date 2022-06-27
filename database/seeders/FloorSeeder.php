<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Branch,Floor};
class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Branch::all() as $branch) {
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '1',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '2',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '3',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '4',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '5',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '6',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '7',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '8',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '9',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '10',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '11',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '12',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '13',
            ]);
            Floor::create([
                'branch_id' => $branch->id,
                'number' => '14',
            ]);
        }
    }
}
