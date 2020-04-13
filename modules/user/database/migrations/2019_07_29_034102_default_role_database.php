<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use APV\User\Models\Role;

class DefaultRoleDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Admin quản trị hệ thống',
        ]);
        Role::create([
            'name' => 'THPT manager',
            'description' => 'Quản lý THPT',
        ]);
        Role::create([
            'name' => 'THCS manager',
            'description' => 'Quản lý THCS',
        ]);
        Role::create([
            'name' => 'TH manager',
            'description' => 'Quản lý TH',
        ]);
        Role::create([
            'name' => 'Another manager',
            'description' => 'Quản lý khác',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Role::truncate();
    }
}
