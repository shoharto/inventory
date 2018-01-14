<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('jobTitle');
            $table->string('gender');
            $table->string('birthDate');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('nid');
            $table->string('country');
            $table->string('city');
            $table->string('zip_code');
            $table->string('address');
            $table->string('email');
            $table->string('mobile');
            $table->string('licence');
            $table->string('details');
            $table->string('hireDate');
            $table->string('image');
            $table->string('salary');
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
        Schema::dropIfExists('employees');
    }
}
