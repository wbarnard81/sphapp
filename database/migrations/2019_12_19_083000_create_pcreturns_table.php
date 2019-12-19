<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcreturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcreturns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site');
            $table->string('fullname');
            $table->string('email');
            $table->string('telephone');
            $table->string('serialnumber');
            $table->string('software');
            $table->string('notes');
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
        Schema::dropIfExists('pcreturns');
    }
}
