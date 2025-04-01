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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->index()->references('id')->on('pacientes');
            $table->foreignId('doctor_id')->index()->references('id')->on('doctors');
            $table->date('fecha');
            $table->time('hora');
            $table->string('motivo');
            $table->string('razon_cancelacion')->nullable();
            $table->enum('status', ['pendiente', 'confirmada', 'atendida', 'cancelada']);
            $table->enum(('tipo'), ['presencial', 'virtual', 'telefonica', 'whatsapp']);
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
        Schema::dropIfExists('citas');
    }
};
