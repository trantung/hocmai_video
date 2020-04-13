<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsPublishTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            if (Schema::hasColumn('livestreams', 'publish_time')) {
                $table->dropColumn('publish_time');
            }
        });
        
        Schema::table('livestreams', function (Blueprint $table) {
            if (!Schema::hasColumn('livestreams', 'is_publish')) {
                $table->integer('is_publish')->nullable()->after('id');
            }
            $table->timestamp('publish_time')->nullable()->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
