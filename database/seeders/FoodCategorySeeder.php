<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodCategory;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodCategory::create([
            'category_name' => 'Breakfast and Combo Meals',
            'branch_id' => 12,
        ]);
        FoodCategory::create([
            'category_name' => 'Beff and Chickem',
            'branch_id' => 12,
        ]);
        FoodCategory::create([
            'category_name' => 'Noodels and Pasta',
            'branch_id' => 12,
        ]);
        FoodCategory::create([
            'category_name' => 'Desserts',
            'branch_id' => 12,
        ]);
        FoodCategory::create([
            'category_name' => 'Juice in can',
            'branch_id' => 12,
        ]);
        FoodCategory::create([
            'category_name' => 'Drinks',
            'branch_id' => 12,
        ]);
    }
}
