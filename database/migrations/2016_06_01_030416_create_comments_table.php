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
            $table->integer('relations_id')->unsigned();
            $table->integer('perspectives_id')->unsigned();
            $table->string('good_comments');
            $table->string('bad_comments');
            $table->integer('times');

            $table->foreign('relations_id')->references('id')->on('relations');
            $table->foreign('perspectives_id')->references('id')->on('perspectives');
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
