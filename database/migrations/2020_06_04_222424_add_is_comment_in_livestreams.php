<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsCommentInLivestreams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            $table->integer('is_comment')->nullable()->after('id');
            $table->integer('per_comment')->nullable()->after('id');
            $table->integer('start_comment')->nullable()->after('id');

            
        });
    }

    /**
     * Reverse the migrations.
     * 1. is_comment cho biết có cần commentfake ko
     *   2. per_comment cho biết bao nhiêu comment cho 1 phút
      *  3. start_comment cho biết thời gian bắt đầu comment
     * @return void
     */
    public function down()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            $table->dropColumn('is_comment');
            $table->dropColumn('per_comment');
            $table->dropColumn('start_comment');
            
        });
    }
}
