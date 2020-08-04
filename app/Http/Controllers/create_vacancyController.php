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
    $currency = $req->POST('currency');
    $job_salary_period = $req->POST('job_salary_period');
    $key_skills = array_wrap($req->POST('key_skills'));
    return view('create_vacancy.third_create_vacancy', compact("name","company","vacancy","city","phone","type_employ","schedule_work","min_salary","currency","job_salary_period","key_skills"));
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
    $currency = $req->POST('currency');
    $job_salary_period = $req->POST('job_salary_period');
    $key_skills = array_wrap($req->POST('key_skills'));
    $radioFrm = $req->POST('radioFrm');
    $description_job = $req->input('description_job');
    $duties = $req->input('duties');
    $requirements = $req->input('requirements');
    $requirements_optional = $req->input('requirements_optional');
    $if = $req->input('if');
    $additionally = $req->input('additionally');
    $descriptionText = "";

    if($radioFrm =="radioTemplate"){
      if(!empty($description_job)){
        $descriptionText="<p>";
        $descriptionText = $descriptionText.$description_job."</p>";
      }
      if(!empty($duties)){
        $descriptionText=  $descriptionText."<br><strong>Обязаности</strong><p>";
        $descriptionText = $descriptionText.$duties."</p>";
      }
      if(!empty($requirements)){
        $descriptionText=  $descriptionText."<br><strong>Требования</strong><br><p>";
        $descriptionText = $descriptionText.$requirements."</p>";
      }
      if(!empty($requirements_optional)){
        $descriptionText=  $descriptionText."<br><strong>Было бы здорово</strong><br><p>";
        $descriptionText = $descriptionText.$requirements_optional."</p>";
      }
      if(!empty($if)){
        $descriptionText=  $descriptionText."<br><strong>Условия</strong><br><p>";
        $descriptionText = $descriptionText.$if."</p>";
      }
      if(!empty($additionally)){
        $descriptionText=  $descriptionText."<p></p><br><p>";
        $descriptionText = $descriptionText.$additionally."</p>";
      }
    }else{
        $descriptionText = $req->input('freeText');
      }
    return view('create_vacancy.finish_create_vacancy', compact("name","company","vacancy","city","phone","type_employ","schedule_work","min_salary","currency","job_salary_period","key_skills", "descriptionText","radioFrm"));
    }

  public function save_step(Request $req){
    $temp = new create_vacancyModel;
    $temp->name = $req->input('name');
    $temp->company = $req->input('company');
    $temp->vacancy = $req->input('vacancy');
    $temp->city = $req->input('city');
    $temp->phone = $req->input('phone');
    $temp->type_employ = $req->input('type_employ');
    $temp->schedule_work = $req->input('schedule_work');
    $temp->min_salary = $req->input('min_salary');
    $temp->currency = $req->input('currency');
    $temp->job_salary_period = $req->input('job_salary_period');
    $key_skills= array_wrap($req->POST('key_skills'));
    $kk = serialize($key_skills);
    $temp->key_skills = $kk;
    $temp->descriptionText = $req->input('descriptionText');
    $temp->save();
    return view('employer.main_employer');
  }
}
