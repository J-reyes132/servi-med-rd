<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Historial extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'cita_id',
        'fecha',
        'descripcion',
        'documento',
    ];

    protected static function boot()
{
    parent::boot();

    static::creating(function ($historial) {
        $historial->codigo = 'HM-' . Str::upper(Str::random(8));
    });
}

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }
}
