<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => 'Ana Lucia Pamplona',
            'telefono' => '3227707243',
            'email' => 'lukitaspamplona@hotmail.com',
            'perfil' => 'ADMINISTRADOR',
            'estado' => 'ACTIVO',
            'contraseña' => bcrypt('12345678')
        ]);
    }
}
