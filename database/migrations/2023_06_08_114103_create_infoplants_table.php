<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoplantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoplants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('watered');
            $table->integer('fertilizered');
            $table->foreignId('buyerId')->constrained('buyers', 'id');
            $table->foreignId('productId')->constrained('products', 'id')->nullable();
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
        Schema::dropIfExists('infoplants');
    }
}
