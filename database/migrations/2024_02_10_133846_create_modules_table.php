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
    Schema::create('modules', function (Blueprint $table) {
      $table->id();
      $table->string('kod_module');
      $table->string('nama_module');
      $table->string('harga_module');
      $table->string('bil_ms');
      $table->string('jenis_bahasa');
      $table->unsignedBigInteger('paper_kategori_subjek_id');
      $table->timestamps();

      $table->foreign('paper_kategori_subjek_id')->references('id')->on('paper_kategori_subjek')->onDelete('cascade');
      
      
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('modules');
  }
};
