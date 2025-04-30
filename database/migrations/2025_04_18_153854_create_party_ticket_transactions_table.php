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
     Schema::create('party_ticket_transactions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('transaction_history_id')->constrained()->onDelete('cascade');
    $table->string('receipt');
    $table->string('mode_of_payment');
    $table->string('product_name');
    $table->string('event_location');
    $table->decimal('taxed_fee', 10, 2);
    $table->date('event_date');
    $table->time('event_time');
    $table->json('product_price');
    $table->json('product_quantity');
    $table->integer('product_total_quantity');
    $table->decimal('product_total_cost', 10, 2);
    $table->string('ticket_pass_code')->nullable();
    $table->string('category');
    $table->date('product_order_date');
    $table->string('status');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('party_ticket_transactions');
    }
};
