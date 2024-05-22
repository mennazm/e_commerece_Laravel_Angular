<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) {
            $table->id('Order_item_id');
            $table->foreignId('Product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('Order_id')->constrained('orders')->onDelete('cascade');
            $table->integer('Quantity');
            $table->decimal('Price', 10, 2);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_orders');
    }
};
