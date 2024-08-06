<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cedula',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'fecha_nacimiento',
        'sexo',
        'edad',
        'direccion',
        'peso',
        'altura',
        'tipo_sangre',
        'enfermedades',
        'nombre_seguro',
        'numero_seguro',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
