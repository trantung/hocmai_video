<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNoteToHocmaiCodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hocmai_cods', function (Blueprint $table) {
            //
            $table->string('note')->nullable()->after('sale_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hocmai_cods', function (Blueprint $table) {
            $table->dropColumn('note');
        });
    }
}
