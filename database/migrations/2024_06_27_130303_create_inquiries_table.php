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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('inquiry_type');
            $table->string('information');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('select_city')->nullable();
            $table->string('select_area')->nullable();
            $table->string('select_state')->nullable();
            $table->string('select_country')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('property_type')->nullable();
            $table->decimal('max_price', 15, 2)->nullable();
            $table->integer('minimum_size_sq_ft')->nullable();
            $table->integer('number_of_baths')->nullable();
            $table->integer('number_of_beds')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
