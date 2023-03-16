<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->string('email', 45)->unique();
            $table->enum('perfil', ['ADMINISTRADOR', 'VENDEDOR'])->default('ADMINISTRADOR');
            $table->enum('estado',['ACTIVO', 'BLOQUEADO'])->default('ACTIVO');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contraseña')->nullable();
            $table->string('imagen', 50)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
