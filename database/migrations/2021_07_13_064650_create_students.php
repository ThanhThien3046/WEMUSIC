<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->Increments('student_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address');
            $table->bigInteger('age');
            $table->string('sex');
            $table->string('phone');
            $table->string('teachers_id');
            $table->string('class_id');
            $table->string('background')->nullable();
            $table->timestamp('created_at')->nullable();
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
