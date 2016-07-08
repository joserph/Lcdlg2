<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');

            $table->timestamps();
        });

        Schema::create('article_tag',function (Blueprint $table)
        {
            $table->increments('id');

            $table->integer('id_article')->unsigned();
            $table->integer('id_tag')->unsigned();

            $table->foreign('id_article')->references('id')->on('sermons');
            $table->foreign('id_tag')->references('id')->on('tags');

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
        Schema::drop('tags');
    }
}
