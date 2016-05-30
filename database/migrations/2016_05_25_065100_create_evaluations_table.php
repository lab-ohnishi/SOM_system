<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
          $table->string('from');
          $table->string('target');
          $input_eval_num = 4;
          for($i=1;$i<=$input_eval_num;$i++){
            $pear = "pear-";
            $pear = $pear.$i;
            $table->integer($pear);
          }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evaluations');
    }
}
