<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocmaiVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocmai_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('scorm_id');
            $table->string('url');
            $table->integer('class_id');
            $table->integer('schoolblock_id');
            $table->integer('subject_id');
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
        Schema::dropIfExists('hocmai_videos');
    }
}
