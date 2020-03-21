<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GroupPersonYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_person_year', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('year');

            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('year')->references('year')->on('school_years');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_person_year');
    }
}
