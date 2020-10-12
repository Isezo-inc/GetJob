<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_vacancyModel;

class searchController extends Controller
{
  public function search_vacancy(Request $req){
    $vacancy = new create_vacancyModel;
    $city= array_wrap($req->GET('city'));
    $countCity= count($city);
    if($countCity<1){
    $query = $vacancy->orderBy('created_at', 'desc')->get();
  }else{
    $query = $vacancy->Where('city','=',$city[0]);
    foreach ($city as $key => $value) {
      if($key!=0){
        $query = $vacancy->Where('city','=',$value)
                         ->union($query);
      }
    }
    $query = $query->orderBy('created_at', 'desc')->get();
  }
    return view('search_vacancy', ['data' => $query]);
  }

  public function view_vacancy(Request $req){
    $vacancy = new create_vacancyModel;
    $selectID= $req->POST('selectID');
    $vacancy = $vacancy->Where('id','=',$selectID)->get();
    foreach ($vacancy as $el) {
      //$text = $el->vacancy;
      $key_skills=unserialize($el->key_skills);
      $k_s="";
      foreach ($key_skills as $value) {
        $k_s=$k_s."<div class='bubble'>".$value."</div>";
      }
      $text = "<div class='data-display-container bloc'>
        <div class='col big pb-3'>
          <strong class='font-weight-bold'>".$el->vacancy."</strong>
          <p>".$el->company." - ".$el->city ."</p>
          <p>". $el->min_salary." ". $el->currency ." в ". $el->job_salary_period."</p>

          <button type='button' class='btn btn-outline-primary' name='button' style='position: absolute;top: 40%;right: 2%;'>Откликнуть на вакансию</button>
        </div>
        <div class='tabs tabs-border'>
          <a class='active tabs' href=''>Детали вакансии</a>
          <a class='tabs' href=''>О компании</a>
          <div style='float:right;'>
            <a href='#'>
              <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                <path fill-rule='evenodd' d='M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z'/>
              </svg>
            </a>
          </div>
        </div>
        <div class='col big' style='padding-top:30px'>
             ".$el->descriptionText."
             <br><strong>Ключевые навыки</strong><br>"
             .$k_s.
        "</div>
      </div>";
    }
    return response()->json(array('resultview'=> $text), 200);
  }

}
