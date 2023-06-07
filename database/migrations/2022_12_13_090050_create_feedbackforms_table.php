<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbackforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uhid');
            $table->string('dateofvisit');
            $table->string('phone');
            $table->string('email');
            $table->longText('openfeedback');
            $table->string('publishable');
            $table->string('overallrating');
            $table->longText('reasonofrating');
            $table->string('regularsource');
            $table->string('rffer');
            $table->string('easeappointment');
            $table->string('easeambiance');
            $table->string('easebillingtime');
            $table->string('easewaitingtime');
            $table->string('easediagonosis');
            $table->string('investigationappointment');
            $table->string('investigationwaiting');
            $table->string('investigationreport');
            $table->string('nurse');
            $table->string('bloodcollection');
            $table->string('radiology');            
            $table->string('technurse');
            $table->string('techbloodcollection');
            $table->string('techradiology');
            $table->string('image_name');
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
        Schema::dropIfExists('feedbackforms');
    }
}
