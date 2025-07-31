<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_estudiante',
        'codigo_materia',
        'nombre_materia',
        'grupo',
        'docente',
        'semestre',
        'turno',
        'fecha_solicitud',
        'motivo',
        'estado',
        'observaciones',
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
}
