<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateVacancyModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_vacancy_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('company');
            $table->string('vacancy');
            $table->string('city');
            $table->string('phone');
            $table->string('type_employ');
            $table->string('schedule_work');
            $table->integer('min_salary');
            $table->string('currency');
            $table->string('job_salary_period');
            $table->text('key_skills');
            $table->MEDIUMTEXT('descriptionText');
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
        Schema::dropIfExists('create_vacancy_models');
    }
}
