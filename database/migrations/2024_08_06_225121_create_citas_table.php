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
            $table->foreignId('paciente_id')->unique()->index()->references('id')->on('pacientes');
            $table->foreignId('doctor_id')->unique()->index()->references('id')->on('doctors');
            $table->foreignId('hospital_id')->unique()->index()->references('id')->on('hospitals');
            $table->date('fecha');
            $table->time('hora');
            $table->string('motivo');
            $table->enum('status', ['pendiente', 'confirmada', 'atendida', 'cancelada']);
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
