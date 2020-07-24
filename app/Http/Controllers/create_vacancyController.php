<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_vacancyModel;

class create_vacancyController extends Controller
{
  public function first_step(Request $req){
    $name = $req->POST('name');
    $company = $req->POST('company');
    $vacancy = $req->POST('vacancy');
    $city = $req->POST('city');
    $phone = $req->POST('phone');
    return view('create_vacancy.second_create_vacancy', compact("name","company","vacancy","city","phone")) ;
  }

  public function second_step(Request $req){
    $name = $req->POST('name');
    $company = $req->POST('company');
    $vacancy = $req->POST('vacancy');
    $city = $req->POST('city');
    $phone = $req->POST('phone');
    $type_employ = $req->POST('type_employ');
    $schedule_work = $req->POST('schedule_work');
    $min_salary = $req->POST('min_salary');
    $max_salary = $req->POST('max_salary');
    $key_skills = $req->POST('key_skills');
    return view('create_vacancy.third_create_vacancy', compact("name","company","vacancy","city","phone","type_employ","schedule_work","min_salary","max_salary","key_skills"));
  }

  public function third_step(Request $req){
    $name = $req->POST('name');
    $company = $req->POST('company');
    $vacancy = $req->POST('vacancy');
    $city = $req->POST('city');
    $phone = $req->POST('phone');
    $type_employ = $req->POST('type_employ');
    $schedule_work = $req->POST('schedule_work');
    $min_salary = $req->POST('min_salary');
    $max_salary = $req->POST('max_salary');
    $key_skills = $req->POST('key_skills');
    $description_job = $req->POST('description_job');
    $duties = $req->POST('duties');
    $requirements = $req->POST('requirements');
    $requirements_optional = $req->POST('requirements_optional');
    $if = $req->POST('if');
    $additionally = $req->POST('additionally');
    return view('create_vacancy.finish_create_vacancy', compact("name","company","vacancy","city","phone","type_employ","schedule_work","min_salary","max_salary","key_skills", "description_job","duties","requirements","requirements_optional","if","additionally"));

  }

  public function save_step(Request $req){
    /*$temp = new Save_vacancy;
    $temp->name = $req->input('name');
    $temp->company = $req->input('company');
    $temp->vacancy = $req->input('vacancy');
    $temp->city = $req->input('city');
    $temp->phone = $req->input('phone');
    $temp->type_employ = $req->input('type_employ');
    $temp->schedule_work = $req->input('schedule_work');
    $temp->min_salary = $req->input('min_salary');
    $temp->max_salary = $req->input('max_salary');
    $temp->key_skills = $req->input('key_skills');
    $temp->description_job = $req->input('description_job');
    $temp->duties = $req->input('duties');
    $temp->requirements = $req->input('requirements');
    $temp->requirements_optional = $req->input('requirements_optional');
    $temp->if = $req->input('if');
    $temp->additionally = $req->input('additionally');
    $temp->save();*/
  }
}
