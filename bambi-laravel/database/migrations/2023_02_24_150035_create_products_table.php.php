<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id')->autoIncrement();
            $table->string('product_brand');
            $table->string('product_name');
            $table->integer('product_price');
            $table->string('product_gender');
            $table->string('product_category');
            $table->longText('product_description');
            $table->string('product_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
