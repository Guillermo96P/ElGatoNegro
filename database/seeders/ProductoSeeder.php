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
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezaaguila.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'CERVEZA AGUILA LIGHT',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezaaguilalight.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'CERVEZA COSTEÑA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezacosteña.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'CERVEZA CLUB COLOMBIA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezaclubcolombia.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'CERVEZA POKER',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cervezapoker.png',
            'categoria_id' => 1
        ]);
        Producto::create([
            'nombre' => 'COCTEL 1',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'coctel1.png',
            'categoria_id' => 2
        ]);
        Producto::create([
            'nombre' => 'COCTEL 2',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'coctel2.png',
            'categoria_id' => 2
        ]);
        Producto::create([
            'nombre' => 'COCTEL 3',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'coctel3.png',
            'categoria_id' => 2
        ]);
        Producto::create([
            'nombre' => 'COCTEL 4',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'coctel4.png',
            'categoria_id' => 2
        ]);
        Producto::create([
            'nombre' => 'COCTEL 5',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'coctel5.png',
            'categoria_id' => 2
        ]);
        Producto::create([
            'nombre' => 'JUGOS HIT',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'jugoshit.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'JUGOS TUTTI FRUTI',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'jugostuttifruti.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'GASEOSA POSTOBON NARANJA 400ml',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'gaseosapostobonnaranja.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'GASEOSA POSTOBON MANZANA 400ml',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'gaseosapostobonmanzana.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'GASEOSA COLOMBIANA 400ml',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'gaseosacolombiana.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'GASEOSA PEPSI 400ml',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'gaseosapepsi.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'GASEOSA COCA-COLA 400ml',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'gaseosacocacola.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'GATORADE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'gatorade.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'SPEED MAX',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'speedmax.png',
            'categoria_id' => 3
        ]);
        Producto::create([
            'nombre' => 'TINTO',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'tinto.png',
            'categoria_id' => 4
        ]);
        Producto::create([
            'nombre' => 'CAFE CON LECHE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cafeconleche.png',
            'categoria_id' => 4
        ]);
        Producto::create([
            'nombre' => 'CAPUCCINO',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'capuccino.png',
            'categoria_id' => 4
        ]);
        Producto::create([
            'nombre' => 'AROMATICA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'aromatica.png',
            'categoria_id' => 4
        ]);
        Producto::create([
            'nombre' => 'EMPANADA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'empanada.png',
            'categoria_id' => 5
        ]);
        Producto::create([
            'nombre' => 'AREPA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'arepa.png',
            'categoria_id' => 5
        ]);
        Producto::create([
            'nombre' => 'PERRO CALIENTE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'perrocaliente.png',
            'categoria_id' => 5
        ]);
        Producto::create([
            'nombre' => 'HAMBURGUESA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'hamburguesa.png',
            'categoria_id' => 5
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO ROTHMANS MEDIA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillorothmansmedia.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO LUCKY STRIKE MEDIA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrilloluckystrikemedia.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO MARLBORO MEDIA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillomarblboromedia.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO MARLBORO FUSION MEDIA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillomarlborofusionmedia.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO ROTHMANS PAQUETE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillorothmanspaquete.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO LUCKY STRIKE PAQUETE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrilloluckystrikepaquete.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO MARLBORO PAQUETE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillomarblboropaquete.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO MARLBORO FUSION PAQUETE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillomarlborofusionpaquete.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO ROTHMANS MEDIA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillorothmanspaquete.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO LUCKY STRIKE PAQUETE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrilloluckystrikepaquete.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO MARLBORO MEDIA',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillomarblboropaquete.png',
            'categoria_id' => 6
        ]);
        Producto::create([
            'nombre' => 'CIGARRILLO MARLBORO FUSION PAQUETE',
            'codigobarras' => '',
            'precio_compra' => 0,
            'precio_venta' => 0,
            'cantidad' => 100,
            'alerta' => 10,
            'imagen' => 'cigarrillomarlborofusionpaquete.png',
            'categoria_id' => 6
        ]);
    }
}
