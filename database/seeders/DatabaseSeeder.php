<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $buyers = new BuyerSeeder;
        $sellers = new SellerSeeder;
        $categories = new CategorySeeder;
        $subCategories = new SubCategorySeeder;
        $products = new ProductSeeder;
        $infoPlants = new InfoplantSeeder;
        $voucherSeeder = new VoucherSeeder;
        $voucherDetailSeeder = new VoucherDetailsSeeder;
        $paymentMethodSeeder = new PaymentMethodSeeder;
        $transactionSeeder = new TransactionSeeder;
        $transactionDetailSeeder = new TransactionDetailSeeder;

        $buyers->run();
        $sellers->run();
        $categories->run();
        $subCategories->run();
        $products->run();
        $infoPlants->run();
        $voucherSeeder->run();
        $voucherDetailSeeder->run();
        $paymentMethodSeeder->run();
        $transactionSeeder->run();
        $transactionDetailSeeder->run();
    }
}
