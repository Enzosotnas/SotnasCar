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
        Schema::create('foto_carros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carro_id')
                ->constrained('carros')
                ->onDelete('cascade');
            $table->string('url');
            $table->boolean('principal')->default(false);
            $table->unsignedTinyInteger('ordem')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_carros');
    }
};