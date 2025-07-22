<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'ci',
        'nombre_completo',
        'email',
        'telefono',
        'fecha_nacimiento',
    ];
}
