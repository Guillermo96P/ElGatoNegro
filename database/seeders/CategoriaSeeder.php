<?php

namespace Database\Seeders;

use App\Models\Categoria;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'CERVEZAS Y TRAGOS',
            'imagen' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);
        Categoria::create([
            'nombre' => 'COCTELES',
            'imagen' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);
        Categoria::create([
            'nombre' => 'BEBIDAS FRIAS',
            'imagen' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);
        Categoria::create([
            'nombre' => 'BEBIDAS CALIENTES',
            'imagen' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);
        Categoria::create([
            'nombre' => 'COMIDA',
            'imagen' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);
        Categoria::create([
            'nombre' => 'POSTRES',
            'imagen' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);
        Categoria::create([
            'nombre' => 'OTROS',
            'imagen' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);
    }
}
