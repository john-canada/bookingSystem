<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_models', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->text('a1');    
                $table->text('a1');
                $table->text('a2');
                $table->text('a3');
                $table->text('a4');
                $table->text('a5');
                $table->string('c_a');   
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
        Schema::dropIfExists('question_models');
    }
}
