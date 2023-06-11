<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        PaymentMethod::create(['name' => 'COD']);
        PaymentMethod::create(['name' => 'Bank Transfer']);
        DB::commit();
    }
}
