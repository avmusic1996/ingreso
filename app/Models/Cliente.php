<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nit',
        'Nombres',
        'Apellidos',
        'Razonsocial',
        'Tipodocumento',
        'Numerodocumento',
        'Correo',
        'Celular',
        'Foto',
        ];
}
