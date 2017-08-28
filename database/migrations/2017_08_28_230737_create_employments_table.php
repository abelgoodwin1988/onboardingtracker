<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->increments('employment_id');
            $table->integer('employee_id');
            $table->integer('position_id');
            $table->date('start_date');
            $table->date('end_date');

            $table->timestamps();

            $table->foreign('employee_id')
                  ->references('employee_id')
                  ->on('employees');
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
        Schema::dropIfExists('employments');
    }
}
