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
        Schema::create('flight_booking_carts', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->foreignId('cart_id')->constrained()->onDelete('cascade'); // Link to Cart
            $table->string('flight_number');
            $table->date('departure_date');
            $table->timestamp('expired_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_booking_carts');
    }
};
