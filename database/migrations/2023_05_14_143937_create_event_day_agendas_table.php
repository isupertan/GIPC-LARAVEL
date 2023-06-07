<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventDayAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_day_agendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eventdays_id');
            $table->foreign('eventdays_id')->references('id')->on('event_days')->onDelete ('cascade');
            $table->string('title');
            $table->string('time');
            $table->string('venue');
            $table->string('duration');
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
        Schema::dropIfExists('event_day_agendas');
    }
}
