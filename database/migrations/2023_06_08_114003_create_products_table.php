<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('stock');
            $table->text('takeCareDesc')->nullable();
            $table->integer('soldQty')->default(0);
            $table->foreignId('categoryId')->constrained('categories', 'id');
            $table->foreignId('subCategoryId')->constrained('sub_categories', 'id');
            $table->foreignId('sellerId')->constrained('sellers', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
