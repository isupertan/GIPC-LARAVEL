<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLangiagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langiages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('primary_id');
            $table->foreign('primary_id')->references('id')->on('primaries')->onDelete ('cascade');
            $table->string('eng_qualification');
            $table->string('other')->nullable();
            $table->string('grades');
            $table->string('achive_date')->nullable();
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
        Schema::dropIfExists('langiages');
    }
}
