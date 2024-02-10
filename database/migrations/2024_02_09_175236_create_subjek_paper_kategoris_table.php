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
        Schema::create('paper_kategori_subjek', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subjek_id');
            $table->unsignedBigInteger('paper_kategori_id');
            // Add any additional columns as needed
            $table->timestamps();

            // Define foreign keys
            $table->foreign('subjek_id')->references('id')->on('subjeks')->onDelete('cascade');
            $table->foreign('paper_kategori_id')->references('id')->on('paper_kategoris')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjek_paper_kategoris');
    }
};
