<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTypePublishTime extends Migration
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
            if (Schema::hasColumn('livestreams', 'timer_clock')) {
                $table->dropColumn('timer_clock');
            }
        });
        Schema::table('livestreams', function (Blueprint $table) {
            $table->timestamp('publish_time')->nullable()->default(null);
            $table->timestamp('timer_clock')->nullable()->default(null);
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
