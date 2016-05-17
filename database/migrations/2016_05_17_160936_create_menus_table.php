<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');            
            $table->enum('estatus', ['principal', 'publico', 'privado', 'oculto']);
            $table->enum('peso', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']);
            $table->enum('tipo', ['normal', 'expandido']);
            $table->integer('id_padre')->nullable();
            $table->enum('categoria', ['articulo', 'fecha']);
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
        Schema::drop('menus');
    }
}
