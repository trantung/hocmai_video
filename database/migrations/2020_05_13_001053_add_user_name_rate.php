<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserNameRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rate_apps', function (Blueprint $table) {
            $table->string('customer_username')->nullable()->after('id');
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
            $table->dropColumn('customer_username');
        });
    }
}
