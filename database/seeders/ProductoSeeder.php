<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'CERVEZA AGUILA',
            'codigobarras' => '',
            'precio_compra' => '',
            'precio_venta' => 2200,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezaaguila.png',
            'categoria_id' => 1
        ]);
    }
}
