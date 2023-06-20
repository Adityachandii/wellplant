<?php

namespace Database\Seeders;

use App\Models\Buyer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        Buyer::create([
            'username' => 'Rafi Muhammad',
            'address' => 'Jalan Soekarno Hatta No.15 Jombang, Ciputat 15414',
            'city' => 'Tangerang Selatan',
            'province' => 'Banten',
            'postcode' => '15414',
            'phone' => '081946578923',
            'dob' => '2002-01-19',
            'email' => 'rafimuhammad80@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::commit();
    }
}
