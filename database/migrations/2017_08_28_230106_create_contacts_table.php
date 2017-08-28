<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('contact_id');
            $table->integer('person_id');
            $table->string('title');
            $table->string('address');
            $table->string('city');
            $table->string('state_province');
            $table->string('country');
            $table->string('zip');
            $table->string('phone_number');
            $table->string('email');
            $table->boolean('is_primary');

            $table->timestamps();

            $table->foreign('person_id')
                  ->references('person_id')
                  ->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
