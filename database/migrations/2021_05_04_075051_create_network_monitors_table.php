<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworkMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network_monitors', function (Blueprint $table) {
            $table->id();
            $table->string('host_name');
            $table->string('ip_address');
            $table->string('succeed_count');
            $table->string('failed_count');
            $table->string('last_ping_status');
            $table->string('last_success_on');
            $table->string('last_failed_on');
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
        Schema::dropIfExists('network_monitors');
    }
}
