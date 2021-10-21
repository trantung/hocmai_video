<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocmaiCodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocmai_cods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('course_id_register')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('package_time_id_register')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_phone_account')->nullable();
            $table->string('user_phone_cod')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('course_name_register')->nullable();
            $table->string('package_time_name_register')->nullable();
            $table->string('base_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hocmai_cods');
    }
}
