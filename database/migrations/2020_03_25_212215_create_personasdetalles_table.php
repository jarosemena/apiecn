<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasdetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personasdetalles', function (Blueprint $table) {
            $table->id($column='personasdetalles_id');
            $table->bigInteger('personas_id');
            $table->string('religion',50);
            $table->string('parroquia',50);
            $table->boolean('conocido_participante');
            $table->boolean('casado_previo');
            $table->string('tiempo_casado',50);
            $table->boolean('union_echo');
            $table->string('tiempo_unido',50);
            $table->string('er_name',50);
            $table->string('er_parentesco',50);
            $table->string('er_celular',50);
            $table->boolean('alergia');
            $table->string('alergia_descripcion',50);
            $table->boolean('constancia');
            $table->string('empresa',50);
            $table->string('dirigido_a',50);
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
        Schema::dropIfExists('personasdetalles');
    }
}
