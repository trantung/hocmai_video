<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rate_apps', function (Blueprint $table) {
            $table->string('os')->nullable()->after('id');
            $table->string('version')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rate_apps', function (Blueprint $table) {
            $table->dropColumn('os');
            $table->dropColumn('version');
        });
    }
}
