<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actividad;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
        $horarios = [
            '8 am-9 am', '9 am-10 am', '10 am-11 am', '11 am-12 pm', '12 pm-13 pm'
        ];

        foreach (range(1, 10) as $i) {
            Actividad::create([
                'nombre' => 'Actividad ' . $i,
                'descripcion' => 'Descripción de la actividad ' . $i,
                'dia_semana' => $dias[array_rand($dias)],
                'horario' => $horarios[array_rand($horarios)],
            ]);
        }
    }
}
