<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $guarded = [];

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }
}
