<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRepeatLivestream extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            $table->integer('repeat')->nullable()->after('id');
            $table->text('teacher_id')->nullable()->after('id');
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
            if (Schema::hasColumn('livestreams', 'repeat')) {
                $table->dropColumn('repeat');
            }
            if (Schema::hasColumn('livestreams', 'teacher_id')) {
                $table->dropColumn('teacher_id');
            }
        });
    }
}
