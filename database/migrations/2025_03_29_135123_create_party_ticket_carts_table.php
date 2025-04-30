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
        Schema::create('party_ticket_carts', function (Blueprint $table) {
            $table->id();

             $table->foreignId('cart_id')->constrained()->onDelete('cascade'); // Link to Cart
            $table->string('event_reference');
            $table->integer('regular_unit')->nullable();
            $table->integer('vip_unit')->nullable();
            $table->integer('vvip_unit')->nullable();
            $table->timestamp('expired_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('party_ticket_carts');
    }
};
