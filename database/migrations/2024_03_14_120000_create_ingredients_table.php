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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table ->unsignedBigInteger('category_id')->nullable();
            $table ->unsignedBigInteger('season_id')->nullable();
            $table ->string('name');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('season_id')->references('id')->on('seasons');
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
