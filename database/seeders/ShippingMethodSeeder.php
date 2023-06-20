<?php

namespace Database\Seeders;

use App\Models\ShippingMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        ShippingMethod::create([
            'name' => 'JNE - REG'
        ]);
        ShippingMethod::create([
            'name' => 'JNE - OKE'
        ]);
        ShippingMethod::create([
            'name' => 'JNE - YES'
        ]);
        ShippingMethod::create([
            'name' => 'JNT - REG'
        ]);
        ShippingMethod::create([
            'name' => 'SiCepat - REG'
        ]);
        ShippingMethod::create([
            'name' => 'Pos Indonesia - REG'
        ]);
        DB::commit();
    }
}
