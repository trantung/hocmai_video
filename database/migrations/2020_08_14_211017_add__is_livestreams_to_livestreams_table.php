<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsLivestreamsToLivestreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            $table->integer('is_livestreams')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     * is_livestreams = 1 livestream test 
     * is_livestreams = 0 livesteam thật
     * @return void
     */
    public function down()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            $table->dropColumn('is_livestreams');
        });
    }
}
