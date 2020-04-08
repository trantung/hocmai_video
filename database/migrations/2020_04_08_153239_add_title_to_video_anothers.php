<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToVideoAnothers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('video_anothers', function (Blueprint $table) {
            $table->string('title');
            $table->string('url');
            $table->integer('class_id');
            $table->integer('schoolbook_id');
            $table->integer('schoolsubject_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video_anothers', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('url');
            $table->dropColumn('class_id');
            $table->dropColumn('schoolbook_id');
            $table->dropColumn('schoolsubject_id');
        });
    }
}
