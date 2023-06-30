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
        Schema::create('brand_games', function (Blueprint $table) {
            $table->unique('launchcode');
            $table->unsignedInteger('brandid');
            $table->string('category');
            $table->boolean('hot');
            $table->boolean('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_games');
    }
};
