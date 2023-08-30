<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('ts_id');
            $table->string('ts_code')->unique();
            $table->foreignId('cust_id')->constrained('customers', 'cust_id');
            $table->foreignId('prd_id')->constrained('products', 'prd_id');
            $table->foreignId('prd_prc_id')->constrained('product_prices', 'prd_prc_id');
            // $table->foreignId('cust_id')->references('cust_id')->on('customers');
            // $table->foreignId('prd_id')->references('prd_id')->on('products');
            // $table->foreignId('prd_prc_id')->references('prd_prc_id')->on('product_prices');
            $table->enum('ts_method', ['QR', 'vBank']);
            $table->enum('ts_status', ['Process', 'Success', 'Failed'])->default('Process');
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
        Schema::dropIfExists('transactions');
    }
}
