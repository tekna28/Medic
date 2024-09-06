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
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('num_consultation')->constrained('consultations');
            $table->foreignId('num_patient')->constrained('patients');
            $table->string('nom_medecin');
            $table->string('prenom_medecin');
            $table->string('nom_patient');
            $table->string('prenom_patient');
            $table->string('nom_medicament');
            $table->text('dosage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordonnances');
    }
};
