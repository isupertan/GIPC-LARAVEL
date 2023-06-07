<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUkhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukhistories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('primary_id');
            $table->foreign('primary_id')->references('id')->on('primaries')->onDelete ('cascade');
            $table->string('uk_visa_number')->nullable();
            $table->string('visa_type')->nullable();
            $table->string('valid_form')->nullable();
            $table->string('valid_to')->nullable();
            $table->string('institution')->nullable();
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
        Schema::dropIfExists('ukhistories');
    }
}
