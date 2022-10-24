<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'sexo',
        'nidentidad',
        'apodo',
        'direccion',
        'phone1',
        'phone2',
        'fecha_nac',
        'email',
        'avata',
        'fotocedula',
        'estado',
        'idenacionalidad'];
}
