<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPasteventIdAndImageAltImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->unsignedBigInteger('past_event_id')->nullable()->after('image_name');
            $table->foreign('past_event_id')->references('id')->on('past_events')->onDelete ('cascade');
            $table->string('image_alt')->nullable()->after('image_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('past_event_id');
            $table->dropColumn('image_alt');
        });
    }
}
