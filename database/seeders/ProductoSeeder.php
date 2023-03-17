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
        Producto::create([
            'nombre' => 'CERVEZA AGUILA LIGHT',
            'codigobarras' => '',
            'precio_compra' => '',
            'precio_venta' => 2500,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezaaguilalight.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'CERVEZA COSTEÑA',
            'codigobarras' => '',
            'precio_compra' => '',
            'precio_venta' => 2200,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezacosteña.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'CERVEZA CLUB COLOMBIA',
            'codigobarras' => '',
            'precio_compra' => '',
            'precio_venta' => 2200,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezaclubcolombia.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'CERVEZA POKER',
            'codigobarras' => '',
            'precio_compra' => '',
            'precio_venta' => 2200,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezapoker.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'CERVEZA POKER',
            'codigobarras' => '',
            'precio_compra' => '',
            'precio_venta' => 2200,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezapoker.png',
            'categoria_id' => 1
        ]);
    }
}
