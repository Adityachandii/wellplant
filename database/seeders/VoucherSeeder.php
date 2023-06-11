<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Voucher::create([
            'title' => 'Diskon 50%',
            'description' => 'Diskon 50% untuk semua produk, dengan maksimum potongan 10rb.',
        ]);
        DB::commit();
    }
}
