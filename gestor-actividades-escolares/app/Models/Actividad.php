<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'dia_semana', 'horario'];

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'inscripcions');
    }
}
