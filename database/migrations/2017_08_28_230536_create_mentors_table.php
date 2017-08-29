<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->increments('mentor_id');
            $table->integer('mentor_type_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->date('start_time')->nullable();
            $table->date('end_time')->nullable();

            $table->timestamps();

            $table->foreign('mentor_type_id')
                  ->references('mentor_type_id')
                  ->on('mentor_types');
            $table->foreign('employee_id')
                  ->references('employee_id')
                  ->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentors');
    }
}
