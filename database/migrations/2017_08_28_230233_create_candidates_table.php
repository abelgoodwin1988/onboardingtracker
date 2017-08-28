<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('candidate_id');
            $table->integer('person_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('complete');

            $table->timestamps();

            $table->foreign('person_id')
                  ->references('person_id')
                  ->on('people');
            $table->foreign('position_id')
                  ->references('position_id')
                  ->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
