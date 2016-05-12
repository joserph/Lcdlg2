<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSermonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('url');//Cambiar a slug
            $table->string('predicador');//Eliminar
            $table->string('mes');//Eliminar
            $table->string('anio');//Eliminar
            $table->string('fecha');//Cambiar a date
            $table->string('content', 50000);
            $table->string('estatus');            
            $table->string('tipo');//colocar enum('predica', 'post')            
            $table->string('audio');
            $table->string('video');
            $table->string('f_name');
            $table->string('f_ruta');
            $table->string('f_exten');
            $table->string('comentario');//Hacer una tabla (Eliminar)
            $table->integer('update_user');
            $table->integer('id_user')->unsigned();
            $table->integer('id_preacher')->unsigned();            
            $table->integer('id_month')->unsigned();            
            $table->integer('id_year')->unsigned();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_preacher')->references('id')->on('preachers');
            $table->foreign('id_month')->references('id')->on('dates');
            $table->foreign('id_year')->references('id')->on('dates');

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
        Schema::drop('sermons');
    }
}
