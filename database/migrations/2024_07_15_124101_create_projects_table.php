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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained()->onDelete('cascade');
            $table->string('thumbnail_image');
            $table->string('developer_image');
            $table->string('hero_image');
            $table->string('price');
            $table->string('developer_name');
            $table->string('hand_over_date');
            $table->longText('long_description');
            $table->json('project_images');
            $table->string('during_construction');
            $table->string('during_hand_over');
            $table->string('slug')->unique();
            $table->string('project_name');
            $table->string('project_address');
            $table->longText('project_location_url');
            $table->string('project_video');
            $table->string('project_boucher_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
