<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Seller::create([
            'name' => 'Aditya Chandi Nugroho',
            'address' => 'Jalan ABC Palmerah, Palmerah 15414',
            'city' => 'Jakarta Barat',
            'province' => 'DKI Jakarta',
            'dob' => '2002-05-23',
            'email' => 'aditya@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::commit();
    }
}
