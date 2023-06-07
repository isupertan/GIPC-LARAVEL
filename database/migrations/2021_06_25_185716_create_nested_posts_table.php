<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNestedPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nested_posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id');
            $table->string('title');
            $table->longText('slug');
            $table->string('image_name');
            $table->string('image_alt');
            $table->longText('description');
            $table->string('meta_title');
            $table->longText('meta_description');
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
        Schema::dropIfExists('nested_posts');
    }
}
