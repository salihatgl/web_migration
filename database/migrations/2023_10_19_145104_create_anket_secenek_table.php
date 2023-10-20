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
        Schema::create('anket_secenek', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anket_id');
            $table->text('secenek');
            $table->timestamps();
            
            $table->foreign('anket_id')->references('id')->on('anket');
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anket_secenek');
    }
};
