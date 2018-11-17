<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseKrewTables extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });

        Schema::create('absence_types', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->timestamps();

            $table->primary('id');
        });

        Schema::create('absences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->string('absence_type_id');
            $table->string('subject');
            $table->text('description')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('employee_id')
                  ->references('id')
                  ->on('employees');

            $table->foreign('absence_type_id')
                  ->references('id')
                  ->on('absence_types');
        });
    }

    public function down()
    {
        Schema::drop('absences');
        Schema::drop('absence_types');
        Schema::drop('employees');
    }
}
