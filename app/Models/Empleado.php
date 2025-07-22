<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'ci',
        'nombre_completo',
        'email',
        'rol',
        'id_turno',
    ];

    public function turno()
    {
        return $this->belongsTo(Turno::class, 'id_turno');
    }
}
