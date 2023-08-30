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
            $table->id('prd_id');
            $table->string('prd_name');
            $table->string('prd_slug')->unique();
            $table->string('prd_dev');
            $table->text('prd_desc')->nullable();
            $table->enum('prd_category', config('enums.prd_category'));
            $table->string('prd_img')->nullable();
            $table->string('prd_item_name')->nullable();
            $table->string('prd_item_img')->nullable();
            $table->enum('prd_status', ['Inactive', 'Active'])->default('Inactive');
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
