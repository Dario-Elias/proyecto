<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ciu',25);
            $table->string ('nombre',50);
            $table->string('apellido',50);
            $table->string('email',50);
            $table->string('direccion',25);
            $table->string('telefono_casa',25);
            $table->string('telefono_movil',25);
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
        Schema::dropIfExists('empleado');
    }
}
