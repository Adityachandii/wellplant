<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Transaction::create([
            'totalPrice' => 55000,
            'voucherId' => null,
            'paymentMethodId' => 1,
            'shippingMethodId' => 1
        ]);
        DB::commit();
    }
}
