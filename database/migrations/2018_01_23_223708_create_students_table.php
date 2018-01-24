<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // Student Details
            $table->string('rollno', 120)->nullable();
            $table->string('first_name', 60);
            $table->string('middle_name', 60)->nullable();
            $table->string('last_name', 60)->nullable();
            $table->string('email', 120)->unique();
            $table->string('phone', 20)->unique();
            $table->string('gender', 30);
            $table->date('date_of_birth');
            $table->string('address', 255);
            $table->string('pictures', 120)->nullable();
            $table->string('documents', 120)->nullable();
            $table->string('school_college', 120);
            // Guardian Details
            $table->string('guardian_title_name', 60)->nullable();
            $table->string('guardian_first_name', 60)->nullable();
            $table->string('guardian_middle_name', 60)->nullable();
            $table->string('guardian_last_name', 60)->nullable();
            $table->string('guardian_relation', 60)->nullable(); // Father, Mother or Other
            $table->string('guardian_phone', 20)->nullable();
            $table->string('guardian_email', 120)->nullable();
            $table->string('guardian_Occupation', 200)->nullable();
            // Admission Details
            $table->string('course_name', 200);
            $table->string('course_academic_year', 20);
            $table->integer('course_quantity');
            $table->float('course_fees');
            $table->float('course_discount')->nullable();
            $table->float('course_total_fees');
            $table->string('course_notes', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
