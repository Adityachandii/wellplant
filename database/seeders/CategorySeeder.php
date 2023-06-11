<?php

namespace Database\Seeders;

use App\Models\Buyer;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Category::create(['name' => 'Plants and Seeds']);
        Category::create(['name' => "Vitamin and Plant's Needs"]);
        Category::create(['name' => "Gardening Tools"]);
        DB::commit();
    }
}
