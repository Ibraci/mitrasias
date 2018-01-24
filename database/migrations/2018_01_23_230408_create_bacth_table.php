<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBacthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bacth', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('batch_name', 200);
            $table->string('batch_sujects', 200);
            $table->string('batch_academic_year', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bacth');
    }
}
