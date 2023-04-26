<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('employee_id')->unique();
            $table->string('email');
            $table->integer('phone');
            $table->text('address');
            $table->string('gender', 1);
            $table->date('date_of_birth');
            $table->string('religion');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->string('photo');
            $table->string('position');
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
};
