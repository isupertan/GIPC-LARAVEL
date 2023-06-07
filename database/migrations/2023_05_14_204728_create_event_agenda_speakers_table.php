<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventAgendaSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_agenda_speakers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eventdays_id');
            $table->foreign('eventdays_id')->references('id')->on('event_days')->onDelete ('cascade');
            $table->unsignedBigInteger('agenda_id');
            $table->foreign('agenda_id')->references('id')->on('event_day_agendas')->onDelete ('cascade');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events')->onDelete ('cascade');
            $table->unsignedBigInteger('speaker_id');
            $table->foreign('speaker_id')->references('id')->on('speakers')->onDelete ('cascade');
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
        Schema::dropIfExists('event_agenda_speakers');
    }
}
