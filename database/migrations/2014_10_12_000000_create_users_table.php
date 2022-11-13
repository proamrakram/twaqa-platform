<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('img')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('age')->nullable();
            // $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('phonenumber2')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('position')->nullable();
            $table->string('parent_position')->nullable();
            // $table->string('qualification')->nullable();
            $table->date('registered_at')->nullable();
            $table->enum('department', ['children', 'men', 'women'])->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('password');
            $table->integer('category')->default(0)->nullable();
            $table->enum('user_type', ['admin', 'supervisor', 'teacher', 'student'])->nullable();
            $table->boolean('is_delete')->default(0);
            $table->boolean('active')->default(1);
            $table->rememberToken();
            $table->timestamps();



            #new columns
            $table->string('address')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('course_category_id')->default(0)->nullable();

            $table->string('link')->nullable();
            $table->string('vedio')->nullable();
            $table->enum('vedio_type', ['link', 'storage'])->nullable();
            $table->string('voice')->nullable();
            $table->enum('voice_type', ['link', 'storage'])->nullable();
            $table->double('available_balance')->default(0);
            $table->double('suspended_balance')->default(0);
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
