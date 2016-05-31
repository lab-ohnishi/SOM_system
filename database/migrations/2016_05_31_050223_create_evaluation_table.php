<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation', function (Blueprint $table) {
            $table->integer('relation_id')->unsigned();
            $table->integer('perspective_id')->unsigned();
            $table->string('pers_value');
            
            $table->foreign('relation_id')->references('id')->on('relation');
            $table->foreign('perspective_id')->references('id')->on('perspective');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evaluation');
    }
}