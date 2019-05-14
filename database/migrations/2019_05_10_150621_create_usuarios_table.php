<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100)->comment = "Este campo es el nombre de la persona";
            $table->string('apellidop',100)->comment = "Este campo es el apellido paterno de la persona";
            $table->string('apellidom',100)->comment = "Este campo es el apellido materno de la persona";
            $table->integer('edad')->comment = "Este campo es la edad de la persona";
            $table->string('direccion',250)->comment = "Este campo es la direccion de la persona";

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
        Schema::dropIfExists('usuarios');
    }
}
