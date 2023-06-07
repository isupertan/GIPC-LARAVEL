<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('image_name');
            $table->string('title');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('email');
            $table->string('whatsapp');
            $table->longText('footer_description_one');
            $table->longText('footer_description_two');
            $table->longText('footer_description_three');
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
        Schema::dropIfExists('settings');
    }
}
