<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Employees Details
            $table->increments('id');
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
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
