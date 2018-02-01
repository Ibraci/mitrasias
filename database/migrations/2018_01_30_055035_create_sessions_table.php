<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('first_name', 60);
            $table->string('middle_name', 60)->nullable();;
            $table->string('last_name', 60)->nullable();;
            $table->string('email', 120)->unique();
            $table->string('phone', 20)->unique();
            $table->string('role', 70)->default('Admin');
            $table->string('password', 220);
            $table->string('pictures', 220)->nullable();;
            $table->string('gender', 30)->nullable();
            $table->string('address', 255)->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
