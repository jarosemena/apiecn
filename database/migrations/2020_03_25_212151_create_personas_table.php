<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id($column='personas_id');         
            $table->string('cedula',50);
            $table->string('nombre',50);
            $table->string('segundo_nombre',50);
            $table->string('apellido',50);
            $table->string('segundo_apellido' ,50);
            $table->integer('celular');
            $table->string('email',100);
            $table->string('status',50);
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
        Schema::dropIfExists('personas');
    }
}
