<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fds', function (Blueprint $table) {           
            $table->id($column='fds_id');         
            $table->datetime('fechaini');
            $table->date('fechafin');
            $table->integer('numero');
            $table->string('prefijo_cert');
            $table->bigInteger('casa_retiro_id');
            $table->bigInteger('parroquia_id');
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
        Schema::dropIfExists('fds');
    }
}
