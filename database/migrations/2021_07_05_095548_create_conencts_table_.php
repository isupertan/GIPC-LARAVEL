<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConenctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conencts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('primary_id');
            $table->foreign('primary_id')->references('id')->on('primaries')->onDelete ('cascade');
            $table->string('source')->nullable();
            $table->string('others')->nullable();
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
        Schema::dropIfExists('conencts');
    }
}
