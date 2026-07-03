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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->char('codice_treno', 8);
            $table->integer('totale_carrozze');
            $table->integer('treno_ritardo');
            $table->boolean('treno_cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
