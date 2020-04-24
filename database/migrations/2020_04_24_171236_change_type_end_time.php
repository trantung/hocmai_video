<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTypeEndTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            if (Schema::hasColumn('livestreams', 'end_time')) {
                $table->dropColumn('end_time');
            }
        });
        Schema::table('livestreams', function (Blueprint $table) {
            $table->timestamp('end_time')->nullable()->default(null);
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
