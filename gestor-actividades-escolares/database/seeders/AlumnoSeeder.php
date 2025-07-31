<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
        $cursos = ['1º ESO', '2º ESO', '3º ESO', '4º ESO'];

        foreach (range(1, 20) as $i) {
            Alumno::create([
                'nombre' => 'Alumno ' . $i,
                'curso' => $cursos[array_rand($cursos)],
                'edad' => rand(12, 16),
            ]);
        }
    }
}
