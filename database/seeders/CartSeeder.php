<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Cart::create([
            'productId' => 1,
            'quantity' => 3,
            'buyerId' => 1
        ]);
        Cart::create([
            'productId' => 2,
            'quantity' => 4,
            'buyerId' => 1
        ]);
        DB::commit();
    }
}
