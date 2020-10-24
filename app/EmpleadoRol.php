<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoRol extends Model
{

    protected $table = 'empleado_rol';
    
    protected $fillable = [
        'user_id', 'rol_id'
    ];
}