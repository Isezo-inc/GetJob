<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reg_hash')->nullable();
            $table->string('auth_token')->nullable();
            $table->string('email');
            $table->string('fname');
            $table->string('sname');
            $table->string('password');
            $table->boolean('confirmed');
            $table->date('reg_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffers');
    }
}
