<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nit', 20)->nullable();
            $table->string('Nombres', 100)->nullable();
            $table->string('Apellidos', 100)->nullable();
            $table->string('Razonsocial', 100)->nullable();
            $table->string('Tipodocumento', 100)->nullable();
            $table->string('Numerodocumento', 50)->nullable();
            $table->string('Correo', 100)->nullable();
            $table->string('Celular', 50)->nullable();
            $table->binary('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
