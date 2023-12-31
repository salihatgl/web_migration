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
        Schema::create('anket_yanit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kullanici_id');
            $table->unsignedBigInteger('anket_id');
            $table->unsignedBigInteger('secenek_id');
            $table->timestamps();
           
            $table->foreign('anket_id')->references('id')->on('anket');
            $table->foreign('secenek_id')->references('id')->on('anket_secenek');
            $table->foreign('kullanici_id')->references('id')->on('users');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anket_yanit');
    }
};