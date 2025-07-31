<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inscripcion;
use App\Models\Actividad;
use App\Models\Alumno;

class InscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumnos = Alumno::all();
        $actividades = Actividad::all();

        foreach ($alumnos as $alumno) {
            // Asignar entre 1 y 3 actividades aleatorias por alumno
            $randomActividades = $actividades->random(rand(1, 3));

            foreach ($randomActividades as $actividad) {
                Inscripcion::create([
                    'alumno_id' => $alumno->id,
                    'actividad_id' => $actividad->id,
                ]);
            }
        }
    }
}
