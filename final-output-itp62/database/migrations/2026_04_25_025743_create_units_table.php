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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->text('description'); 
            $table->string('mainpic');
            $table->string('video')->nullable();
            $table->string('details');
            $table->string('location_image')->nullable();
            $table->string('location_name');
            $table->string('guests');
            $table->string('beds');
            $table->string('slug')->unique(); 
            $table->timestamps();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
