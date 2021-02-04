<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patente');
            $table->text('vehiculo');
            $table->integer('valor_permiso');
            $table->integer('intereses_ajustes');
            $table->integer('multas_impagas');
            $table->integer('subtotal');
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
        Schema::dropIfExists('datos_vehiculos');
    }
}
