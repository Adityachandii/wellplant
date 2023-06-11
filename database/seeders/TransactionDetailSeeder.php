<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        TransactionDetail::create([
            'productId' => 1,
            'quantity' => 1,
            'transactionId' => 1
        ]);

        TransactionDetail::create([
            'productId' => 7,
            'quantity' => 1,
            'transactionId' => 1
        ]);
        DB::commit();
    }
}
