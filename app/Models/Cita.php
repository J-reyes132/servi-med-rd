<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'doctor_id',
        'hospital_id',
        'fecha',
        'hora',
        'motivo',
        'status',
        'razon_cancelacion',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function scopePacienteId($query, $paciente)
    {
        if (!empty($paciente)) {
            return $query->where('paciente_id', $paciente);
        }
    }
}
