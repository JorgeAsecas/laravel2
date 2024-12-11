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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumno_id')->constrained()->onDelete('cascade');
            $table->foreignId('ccee_id')->constrained('ccee')->onDelete('cascade');
            $table->decimal('nota', 5, 2);
            $table->timestamps();

            $table->unique(['alumno_id','ccee_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
