<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');  
            $table->string('comentario');                      
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');  
            $table->integer('id_article')->unsigned();
            $table->foreign('id_article')->references('id')->on('sermons')->onDelete('cascade');

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
        Schema::drop('comments');
    }
}
