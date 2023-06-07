<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmigrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immigrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('primary_id');
            $table->foreign('primary_id')->references('id')->on('primaries')->onDelete ('cascade');
            $table->string('birth_country');
            $table->string('present_natinality');
            $table->string('residence_country');
            $table->string('residence_uk');
            $table->string('denied_uk');
            $table->string('refuse_visa');
            $table->string('studied_uk_prev');
            $table->string('overstayed_uk');
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
        Schema::dropIfExists('immigrations');
    }
}
