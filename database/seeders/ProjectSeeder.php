<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Proyecto Laravel',
            'description' => 'Aplicación web desarrollada con Laravel.'
        ]);

        Project::create([
            'name' => 'Gestión de Alumnos',
            'description' => 'Sistema CRUD para la gestión de alumnos.'
        ]);

        Project::create([
            'name' => 'Plataforma Educativa',
            'description' => 'Proyecto orientado a centros educativos.'
        ]);
    }
}
