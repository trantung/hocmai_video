<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSourceIdAnotherVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('another_videos', function (Blueprint $table) {
            $table->text('source_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('another_videos', function (Blueprint $table) {
            if (Schema::hasColumn('another_videos', 'source_id')) {
                $table->dropColumn('source_id');
            }
            
        });
    }
}
