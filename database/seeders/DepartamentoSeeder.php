<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamento::create([
                 'id' => 1,
                 'nombre' => 'Desarrollo',
             ]);
             Departamento::create([
                'id' => 2,
                'nombre' => 'Financiero',
            ]);
            Departamento::create([
                'id' => 3,
                'nombre' => 'Recursos Humanos',
            ]);
            Departamento::create([
                'id' => 4,
                'nombre' => 'Ventas',
            ]);
            Departamento::create([
                'id' => 5,
                'nombre' => 'otros',
            ]);

    }
}
