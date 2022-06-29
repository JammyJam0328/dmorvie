<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Branch,Type,Status};
class TypeSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Branch::all() as $branch) {
            Type::create([
                'branch_id' => $branch->id,
                'name' => 'Single',
                'description' => 'Single room',
            ]);
            Type::create([
                'branch_id' => $branch->id,
                'name' => 'Double',
                'description' => 'Double room',
            ]);
            Type::create([
                'branch_id' => $branch->id,
                'name' => 'Triple',
                'description' => 'Triple room',
            ]);
            Type::create([
                'branch_id' => $branch->id,
                'name' => 'Queen',
                'description' => 'Queen room',
            ]);
            Type::create([
                'branch_id' => $branch->id,
                'name' => 'King',
                'description' => 'King room',
            ]);
        }
        Status::create([
            'name' => 'Available',
            'description' => 'Room is available',
        ]);
        Status::create([
            'name' => 'Occupied',
            'description' => 'Room is reserved',
        ]);
        Status::create([
            'name' => 'Unclean',
            'description' => 'Room is reserved',
        ]);
        Status::create([
            'name' => 'Reserved',
            'description' => 'Room is reserved',
        ]);
        Status::create([
            'name' => 'Selected',
            'description' => 'Room is selected',
        ]);

    }
}
