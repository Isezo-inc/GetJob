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
            $table->string('name_Company');
            $table->string('vacancy');
            $table->string('city');
            $table->integer('phone');
            $table->string('type_employ');
            $table->string('schedule_work');
            $table->integer('min_salary');
            $table->integer('max_salary');
            $table->text('key_skills');
            $table->text('description_job');
            $table->text('duties');
            $table->text('requirements');
            $table->text('requirements_optional');
            $table->text('if');
            $table->text('additionally');
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
