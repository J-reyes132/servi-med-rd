<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Código único del historial
            $table->foreignId('paciente_id')->unsigned()->index()->references('id')->on('pacientes')->onDelete('cascade'); // Asociar con el paciente
            $table->foreignId('cita_id')->nullable()->unsigned()->index()->references('id')->on('citas'); // Asociar con la cita
            $table->date('fecha');
            $table->text('descripcion');
            $table->string('documento')->nullable(); // Ruta del archivo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historials');
    }
};
