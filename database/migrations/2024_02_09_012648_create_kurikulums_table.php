<?php

use App\Models\Kurikulum;
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
        Schema::create('kurikulums', function (Blueprint $table) {
            $table->id();
            $table->string('kurikulum');
            //foreign key from table tahap_pendidikan
            $table->unsignedBigInteger('tahap_pendidikan_id');
            $table->timestamps();

            //foreign key from table tahap_pendidikan
            $table->foreign('tahap_pendidikan_id')->references('id')->on('tahap_pendidikans')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurikulums');
    }
};
