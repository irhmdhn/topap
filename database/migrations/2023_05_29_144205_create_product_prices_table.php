<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id('prd_prc_id');
            // $table->unsignedBigInteger('prd_id');
            // $table->foreign('prd_id')->references('prd_id')->on('products');
            $table->unsignedBigInteger('prd_id')->nullable();
            $table->foreign('prd_id')->references('prd_id')->on('products')->cascadeOnUpdate()->cascadeOnDelete();
            // $table->foreign('prd_id')->constrained('products', 'prd_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('prd_prc_vol')->nullable();
            $table->integer('prd_prc')->nullable();
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
        Schema::dropIfExists('product_prices');
    }
}
