<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        SubCategory::create([
            'name' => 'Plants',
            'categoryId' => 1,
        ]);
        SubCategory::create([
            'name' => 'Seeds',
            'categoryId' => 1,
        ]);
        SubCategory::create([
            'name' => 'Other',
            'categoryId' => 1,
        ]);
        SubCategory::create([
            'name' => 'Organic',
            'categoryId' => 2,
        ]);
        SubCategory::create([
            'name' => 'Inorganic',
            'categoryId' => 2,
        ]);
        SubCategory::create([
            'name' => 'Other',
            'categoryId' => 2,
        ]);
        SubCategory::create([
            'name' => 'Container Gardening',
            'categoryId' => 3,
        ]);
        SubCategory::create([
            'name' => 'Seed Starting',
            'categoryId' => 3,
        ]);
        SubCategory::create([
            'name' => 'Tools',
            'categoryId' => 3,
        ]);
        SubCategory::create([
            'name' => 'Other',
            'categoryId' => 3,
        ]);
        DB::commit();
    }
}
