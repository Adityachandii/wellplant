<?php

namespace Database\Seeders;

use App\Models\VoucherDetails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        VoucherDetails::create([
            'voucherId' => 1,
            'discount' => 50,
            'ongkir' => null,
        ]);
        DB::commit();
    }
}
