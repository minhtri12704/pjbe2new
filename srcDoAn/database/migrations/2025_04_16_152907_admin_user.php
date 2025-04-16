<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('account_type')->nullable();
        $table->string('user_id')->nullable()->unique();
        $table->string('address')->nullable();
        $table->string('phone')->nullable();
        $table->string('role')->nullable();
        //them email vao nua
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['account_type', 'user_id', 'address', 'phone', 'role']);
    });
}

};
