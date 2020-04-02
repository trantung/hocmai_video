<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescToSchoolbooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schoolbooks', function (Blueprint $table) {
            $table->string('name')->nullable()->after('id');
            $table->string('desc')->nullable()->after('name');
            $table->integer('class_id')->nullable()->after('desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schoolbooks', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('desc');
            $table->dropColumn('class_id');
        });
    }
}
