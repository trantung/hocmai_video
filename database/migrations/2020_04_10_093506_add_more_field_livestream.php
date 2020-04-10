<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldLivestream extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            $table->integer('class_id')->nullable()->after('id');
            $table->integer('subject_id')->nullable()->after('id');
            $table->integer('schoolblock_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            if (Schema::hasColumn('livestreams', 'class_id')) {
                $table->dropColumn('class_id');
            }
            if (Schema::hasColumn('livestreams', 'subject_id')) {
                $table->dropColumn('subject_id');
            }
            if (Schema::hasColumn('livestreams', 'schoolblock_id')) {
                $table->dropColumn('schoolblock_id');
            }
            
        });
    }
}
