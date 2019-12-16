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
            $table->bigIncrements('id');
            $table->text('aff_link')->nullable();
            $table->string('campaign')->nullable();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->double('discount')->nullable();
            $table->string('discount_amount')->nullable();
            $table->string('discount_rate')->nullable();
            $table->string('domain')->nullable();
            $table->text('image')->nullable();
            $table->string('merchant')->nullable();
            $table->text('name')->nullable();
            $table->double('price')->nullable();
            $table->string('product_id')->nullable();
            $table->string('promotion')->nullable();
            $table->string('sku')->nullable();
            $table->string('status_discount')->nullable();
            $table->text('url')->nullable();
            $table->tinyInteger('hasDelete')->default(config('constant.hasDelete'));
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
