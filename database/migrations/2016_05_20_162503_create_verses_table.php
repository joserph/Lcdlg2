<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('libro');
            $table->integer('capitulo');
            $table->integer('versiculo');
            $table->string('texto');
            $table->integer('id_user')->unsigned();
            $table->integer('update_user');
            $table->foreign('id_user')->references('id')->on('users');            

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
        Schema::drop('verses');
    }
}
