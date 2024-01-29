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
        Schema::create('cart_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')
                    ->on('products')->onDelete('cascade')->onUpdate('cascade');        
            $table->bigInteger('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')
                            ->on('carts')->onDelete('cascade')->onUpdate('cascade');                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_products');
    }
};
