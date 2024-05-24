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
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 80);
            $table->string('stazione_di_arrivo', 0);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno', 8);
            $table->string('numero_carrozze', 3);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
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
