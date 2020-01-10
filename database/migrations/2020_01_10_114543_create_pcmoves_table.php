<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcmovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcmoves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from_name');
            $table->string('to_name');
            $table->string('from_site');
            $table->string('to_site');
            $table->timestamp('move_date');
            $table->string('contact_details');
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
        Schema::dropIfExists('pcmoves');
    }
}
