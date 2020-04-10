<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsLivestreams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            $table->integer('require_login')->nullable()->after('id');
            $table->text('description')->nullable()->after('id');
            $table->string('publish_time');//thời điểm đăng
            $table->string('timer_clock');//hẹn giờ
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
            if (Schema::hasColumn('livestreams', 'require_login')) {
                $table->dropColumn('require_login');
            }
            if (Schema::hasColumn('livestreams', 'description')) {
                $table->dropColumn('description');
            }
            if (Schema::hasColumn('livestreams', 'publish_time')) {
                $table->dropColumn('publish_time');
            }
            if (Schema::hasColumn('livestreams', 'timer_clock')) {
                $table->dropColumn('timer_clock');
            }
            
        });
    }
}
