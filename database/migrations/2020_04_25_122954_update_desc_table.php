<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDescTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schoolblocks', function (Blueprint $table) {
            $table->text('desc')->nullable()->change();
        });
        Schema::table('subjects', function (Blueprint $table) {
            $table->text('desc')->nullable()->change();
        });
        Schema::table('teachers', function (Blueprint $table) {
            $table->text('desc')->nullable()->change();
        });
        Schema::table('classes', function (Blueprint $table) {
            $table->text('desc')->nullable()->change();
        });
        Schema::table('headers', function (Blueprint $table) {
            $table->text('desc')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schoolblocks', function (Blueprint $table) {
            $table->string('desc')->nullable()->change();
        });
        Schema::table('subjects', function (Blueprint $table) {
            $table->string('desc')->nullable()->change();
        });
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('desc')->nullable()->change();
        });
        Schema::table('classes', function (Blueprint $table) {
            $table->string('desc')->nullable()->change();
        });
        Schema::table('headers', function (Blueprint $table) {
            $table->string('desc')->nullable()->change();
        });
    }
}
