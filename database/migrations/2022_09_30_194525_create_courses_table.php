<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('hours');
            $table->integer('period');
            $table->json('students');
            $table->integer('teacher_id');
            $table->enum('department',['children','men','women']);
            $table->integer('category');
            $table->integer('course_type_id');
            $table->integer('lesson_type_id');
            $table->boolean('renewed');
            $table->double('student_price');
            $table->double('teacher_price');
            $table->integer('student_price_currency');
            $table->integer('teacher_price_currency');
            $table->integer('supervisor_id');
            $table->string('group_name')->nullable();
            $table->string('img')->nullable();
            $table->boolean('active');
            $table->boolean('is_delete')->default(0);
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
        Schema::dropIfExists('courses');
    }
}
