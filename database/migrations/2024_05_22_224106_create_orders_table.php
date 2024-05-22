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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('Id');
            $table->dateTime('Date');
            $table->decimal('Total_price', 10, 2);
            $table->enum('State', ['Pending', 'Accepted', 'Rejected']);
            $table->foreignId('User_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
