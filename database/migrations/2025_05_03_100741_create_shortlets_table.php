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
        Schema::create('shortlets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->string('apartment_title');
            $table->string('address');
            $table->longText('description');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('max_guest')->nullable();
            $table->string('apartment_type');
            $table->string('checking_option');
            $table->decimal('apartment_price', 10, 2);
            $table->json('images');
            $table->boolean('apartment_availability')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortlets');


    }


};
