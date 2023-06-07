<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDoctorQualificationAndDoctorTimingsToDoctorLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor_lists', function (Blueprint $table) {
            $table->string('doctor_qualification')->nullable()->default(null)->aftet('description');
            $table->string('doctor_timings')->nullable()->default(null)->aftet('price');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_lists', function (Blueprint $table) {
            $table->dropColumn('doctor_qualification');
            $table->dropColumn('doctor_timings');
        });
    }
}
