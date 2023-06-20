<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ShippingMethod;
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
        $shippingMethod = new ShippingMethodSeeder;
        $products = new ProductSeeder;
        $cart = new CartSeeder;
        $infoPlants = new InfoplantSeeder;
        $voucherSeeder = new VoucherSeeder;
        $voucherDetailSeeder = new VoucherDetailsSeeder;
        $paymentMethodSeeder = new PaymentMethodSeeder;
        $transactionSeeder = new TransactionSeeder;
        $transactionDetailSeeder = new TransactionDetailSeeder;
        $reminderSeeder = new ReminderSeeder;

        $buyers->run();
        $sellers->run();
        $categories->run();
        $subCategories->run();
        $shippingMethod->run();
        $products->run();
        $cart->run();
        $infoPlants->run();
        $voucherSeeder->run();
        $voucherDetailSeeder->run();
        $paymentMethodSeeder->run();
        $transactionSeeder->run();
        $transactionDetailSeeder->run();
        $reminderSeeder->run();
    }
}
