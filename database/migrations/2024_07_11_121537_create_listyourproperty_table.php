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
        Schema::create('listyourproperty', function (Blueprint $table) {
            $table->id();
            $table->string('listing_type');
            $table->string('user_type');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('property_type');
            $table->decimal('max_price', 10, 2);
            $table->integer('minimum_size');
            $table->integer('number_of_beds');
            $table->integer('number_of_baths');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listyourproperty');
    }
};
