<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Actividad;

class Alumno extends Model
{
    protected $guarded = [];

    public function actividades()
    {
        return $this->belongsToMany(Actividad::class, 'inscripcions');
    }
}
