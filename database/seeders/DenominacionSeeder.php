<?php

namespace Database\Seeders;

use App\Models\Denominacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DenominacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Denominacion::create([
            'tipo' => 'EFECTIVO',
            'valor' => 1000
        ]);
        Denominacion::create([
            'tipo' => 'EFECTIVO',
            'valor' => 2000
        ]);
        Denominacion::create([
            'tipo' => 'EFECTIVO',
            'valor' => 5000
        ]);
        Denominacion::create([
            'tipo' => 'EFECTIVO',
            'valor' => 10000
        ]);
        Denominacion::create([
            'tipo' => 'EFECTIVO',
            'valor' => 20000
        ]);
        Denominacion::create([
            'tipo' => 'EFECTIVO',
            'valor' => 50000
        ]);
        Denominacion::create([
            'tipo' => 'EFECTIVO',
            'valor' => 100000
        ]);
        Denominacion::create([
            'tipo' => 'NEQUI',
            'valor' => 0
        ]);
        Denominacion::create([
            'tipo' => 'DAVIPLATA',
            'valor' => 0
        ]);
        Denominacion::create([
            'tipo' => 'OTRO',
            'valor' => 0
        ]);
    }
}
