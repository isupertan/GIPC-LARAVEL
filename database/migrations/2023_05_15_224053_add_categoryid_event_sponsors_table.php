<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryidEventSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_sponsors', function (Blueprint $table) {
            $table->unsignedBigInteger('sponsor_category_id');
            $table->foreign('sponsor_category_id')->references('id')->on('sponsors_categories')->onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_sponsors', function (Blueprint $table) {
            $table->dropColumn('sponsor_category_id');
        });
    }
}
