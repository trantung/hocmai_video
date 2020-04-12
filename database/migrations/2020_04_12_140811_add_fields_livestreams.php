<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsLivestreams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            if (Schema::hasColumn('livestreams', 'publish_time')) {
                $table->dropColumn('publish_time');
            }
        });
        
        Schema::table('livestreams', function (Blueprint $table) {
            if (!Schema::hasColumn('livestreams', 'class_id')) {
                $table->integer('class_id')->nullable()->after('id');
            }
            if (!Schema::hasColumn('livestreams', 'schoolblock_id')) {
                $table->integer('schoolblock_id')->nullable()->after('id');
            }
            if (!Schema::hasColumn('livestreams', 'subject_id')) {
                $table->integer('subject_id')->nullable()->after('id');
            }
            if (!Schema::hasColumn('livestreams', 'publish_time')) {
                $table->integer('publish_time')->nullable()->after('id');
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
