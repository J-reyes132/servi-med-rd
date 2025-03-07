<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cedula',
        'nombre',
        'apellido',
        'email',
        'especialidad',
        'telefono',
        'exequatur',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
