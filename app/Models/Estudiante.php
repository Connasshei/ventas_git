<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'ci',
        'correo',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'genero',
        'carrera',
        'año_ingreso',
        'estado',
    ];
}
