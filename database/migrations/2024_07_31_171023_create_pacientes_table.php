<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('cedula')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            $table->enum('sexo', ['Masculino', 'Femenino', 'Otro']);
            $table->integer('edad');
            $table->string('direccion');
            $table->float('peso');
            $table->float('altura');
            $table->string('tipo_sangre');
            $table->text('enfermedades')->nullable();
            $table->string('nombre_seguro')->nullable();
            $table->string('numero_seguro')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
