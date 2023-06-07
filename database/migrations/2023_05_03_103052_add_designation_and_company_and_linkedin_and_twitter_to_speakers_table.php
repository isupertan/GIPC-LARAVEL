<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDesignationAndCompanyAndLinkedinAndTwitterToSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->string('company')->nullable()->after('title');
            $table->string('designation')->nullable()->after('company');
            $table->string('linkedin')->nullable()->after('designation');
            $table->string('twitter')->nullable()->after('linkedin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('designation');
            $table->dropColumn('linkedin');
            $table->dropColumn('twitter');
        });
    }
}
