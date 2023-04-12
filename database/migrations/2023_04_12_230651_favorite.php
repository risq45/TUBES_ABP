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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id('FavoriteID');
            $table->unsignedBigInteger('WorkshopID');
            $table->unsignedBigInteger('AccountID');
            $table->foreign('AccountID')
                ->references('AccountID')->on('accounts')->onDelete('cascade');
            $table->foreign('WorkshopID')
                ->references('WorkshopID')->on('workshops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
