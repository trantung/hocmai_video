<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTypeLivestreams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            $table->string('name', 256)->nullable()->change();
        });
        Schema::table('livestreams', function (Blueprint $table) {
            $table->string('image_small', 256)->nullable()->change();
        });
        Schema::table('livestreams', function (Blueprint $table) {
            $table->string('image_big', 256)->nullable()->change();
        });
        Schema::table('livestreams', function (Blueprint $table) {
            $table->string('timer_clock', 256)->nullable()->change();
        });
        Schema::table('livestreams', function (Blueprint $table) {
            $table->string('publish_time', 256)->nullable()->change();
        });

        Schema::table('livestreams', function (Blueprint $table) {
            if (Schema::hasColumn('livestreams', 'desc')) {
                $table->dropColumn('desc');
            }
            if (Schema::hasColumn('livestreams', 'class_id')) {
                $table->dropColumn('class_id');
            }
            if (Schema::hasColumn('livestreams', 'type')) {
                $table->dropColumn('type');
            }
            if (Schema::hasColumn('livestreams', 'schoolblock_id')) {
                $table->dropColumn('schoolblock_id');
            }
            if (Schema::hasColumn('livestreams', 'user_id')) {
                $table->dropColumn('user_id');
            }
            if (Schema::hasColumn('livestreams', 'subject_id')) {
                $table->dropColumn('subject_id');
            }
            if (Schema::hasColumn('livestreams', 'teacher_id')) {
                $table->dropColumn('teacher_id');
            }
            if (Schema::hasColumn('livestreams', 'comment')) {
                $table->dropColumn('comment');
            }
            if (Schema::hasColumn('livestreams', 'DateCreated')) {
                $table->dropColumn('DateCreated');
            }
            if (Schema::hasColumn('livestreams', 'DisplayDate')) {
                $table->dropColumn('DisplayDate');
            }
            if (Schema::hasColumn('livestreams', 'url')) {
                $table->dropColumn('url');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
