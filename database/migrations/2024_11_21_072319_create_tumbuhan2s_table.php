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
        Schema::create('tumbuhan2s', function (Blueprint $table) {
            $table->id('id_tumbuhan2');
            $table->string('nama_tumbuhan2');
            $table->string('deskripsi_tumbuhan2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tumbuhan2s');
    }
};
