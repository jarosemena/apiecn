<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id($column='solicitud_id');         
            $table->bigInteger('novio');
            $table->bigInteger('novia');
            $table->bigInteger('fds_solicitado');
            $table->bigInteger('fds_asistido');
            $table->bigInteger('noche_id');
            $table->date('fecha_boda');
            $table->integer('tiempo_novios');
            $table->smallInteger('como_se_entero');
            $table->string('como_se_entero_detalle');
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
        Schema::dropIfExists('solicitudes');
    }
}
