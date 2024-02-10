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
        Schema::create('subjeks', function (Blueprint $table) {
            $table->id();
            $table->string('subjek');
            $table->string('kategori')->nullable();
            $table->string('sub_kategori')->nullable();
            //foreign key from table kurikulum
            $table->unsignedBigInteger('kurikulum_id');
            //foreign key from table kurikulum
        
            $table->timestamps();

            //foreign key from table kurikulum
            $table->foreign('kurikulum_id')->references('id')->on('kurikulums')
            ->onDelete('cascade')->onUpdate('cascade');
            // //foreign key from table kurikulum
            // $table->foreign('paper_kategori_id')->references('id')->on('paper_kategoris')
            // ->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjeks');
    }
};

 