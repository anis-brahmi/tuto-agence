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
        Schema::table('properties', function (Blueprint $table) {
            $table->string('title'); // Property title
            $table->text('description'); // Property description
            $table->integer('rooms'); // Number of rooms
            $table->integer('bedrooms'); // Number of bedrooms
            $table->integer('bathrooms'); // Number of bathrooms
            $table->integer('garages')->nullable(); // Number of garages, nullable if not available
            $table->decimal('area', 8, 2); // Area in square meters (with 2 decimal places)
            $table->decimal('price', 10, 2); // Price (with 2 decimal places)
            $table->string('image')->nullable(); // Property image URL, nullable
            $table->boolean('status')->default(true); // Status (active/inactive), default to true
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            //
        });
    }
};
