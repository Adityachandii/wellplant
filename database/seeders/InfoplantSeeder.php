<?php

namespace Database\Seeders;

use App\Models\Infoplant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoplantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Infoplant::create([
            'name' => 'California Yellow Poppy',
            'watered' => 5,
            'fertilizered' => 2,
            'buyerId' => 1,
            'productId' => 5
        ]);
        DB::commit();
    }
}
