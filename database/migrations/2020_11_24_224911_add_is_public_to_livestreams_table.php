<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsPublicToLivestreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            //
            $table->integer('is_public')->after('require_login')->default(1);
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
            //
            $table->dropColumn('is_public');
        });
    }
}
