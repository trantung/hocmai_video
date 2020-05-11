<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Remove extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment_fakes', function (Blueprint $table) {
            $table ->string('name')->nullable()->after('id');
        });
        Schema::table('comment_fakes', function (Blueprint $table) {
            $table ->dropColumn('userFake_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_fakes', function (Blueprint $table) {
            
            $table::dropColumn('name');
        });
    }
}
