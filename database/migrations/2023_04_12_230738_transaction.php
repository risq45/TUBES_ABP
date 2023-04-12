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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('TransactionID');
            $table->unsignedBigInteger('WorkshopID');
            $table->unsignedBigInteger('AccountID');
            $table->unsignedBigInteger('ServiceID');
            $table->foreign('AccountID')
                ->references('AccountID')->on('accounts')->onDelete('cascade');
            $table->foreign('WorkshopID')
                ->references('WorkshopID')->on('workshops')->onDelete('cascade');
            $table->foreign('ServiceID')
                ->references('ServiceID')->on('services')->onDelete('cascade');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
