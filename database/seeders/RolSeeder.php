<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RolModel;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RolModel::create([
            'nombre' => "Profesor"
        ]);
        RolModel::create([
            'nombre' => "Alumno"
        ]);
    }
}
