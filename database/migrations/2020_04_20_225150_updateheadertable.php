<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Updateheadertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('headers', function (Blueprint $table) {
            $table->string('start_time')->nullable()->change();
            $table->string('end_time')->nullable()->change();
        });
        Schema::table('footers', function (Blueprint $table) {
            $table->string('start_time')->nullable()->change();
            $table->string('end_time')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('headers', function (Blueprint $table) {
            $table->datetime('start_time')->nullable()->change();
            $table->datetime('end_time')->nullable()->change();
        });
        Schema::table('footers', function (Blueprint $table) {
            $table->datetime('start_time')->nullable()->change();
            $table->datetime('end_time')->nullable()->change();
        });
    }
}
