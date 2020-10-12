<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Поиск вакансии</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/stafferstyle.css">
  <link rel = "stylesheet" href="css/enterTheSystem.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
          placeholder:"Город",
          width:'resolve'
        });
    });
  </script>
</head>
<body>
  @include('staffer.header_staffer')

  <main role="main" class="mt-2" style="color:black;">
    <div class="nav nav-search">
      <div class="col col-mobile-full col-form-collapse">
        <form id="job-search-form" class="form-inline " action="{{route('search_vacancy')}}" accept-charset="UTF-8" method="get">
          <div class="col-12 col-sm-4 col-md-4 col-xl-5 pb-4">
            <input type="text" class="form-control search-form" name="job" value="" placeholder="Должность" autocomplete="off">
          </div>
          <div class="col-12 col-sm-4 col-md-4 col-xl-5 pb-4">
            <select class="js-example-basic-multiple form-control" placeholder="Город" name="city[]" multiple="multiple" style="width:100%;">
              <option value="Биробиджан">Биробиджан</option>
              <option value="Казань">Казань</option>
            </select>
          </div>
          <div class="col-6 col-sm-1 col-md-2 col-xl-1 pb-4">
            <button type="submit" class="btn btn-danger btn-lg">Найти</button>
          </div>
          <div class="show-mobile col-6 col-sm-1 col-md-2 col-xl-1 pb-4">
            <img src="https://www.careerbuilder.com/cdn/assets/us/icons/filter-fa597cb7f168acabbc4851b8a5338e80823d817085f51be70f94c31ef8eb1066.svg" alt="Filter">
          </div>
        </form>


      </div>
      <div class="col col-mobile-full" id="form-hide">
        <form action="/jobs" class="form-material" id="jobs-filters-content" method="get">
          <nav>
            <ul class="topmenu">
              <li>
                <a>Тип работы
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </a>
                <ul class="submenu">
                  <li class="">
                    <input type="checkbox" id="job_all" value="Все" class="emp" checked="checked">
                    <label for="job_all">Все</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="full_job" value="Полная занятность" class="">
                    <label for="full_job">Полная занятность</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="part_job" value="Частичная занятность" class="">
                    <label for="part_job">Частичная занятность</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="time_job" value="Проектная/временная работа" class="">
                    <label for="time_job">Проектная/временная работа</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="internship_job" value="Стажировка" class="">
                    <label for="internship_job">Стажировка</label>
                  </li>
                  <input type="hidden" name="emp" id="emp" value="all">
                </ul>
              </li>

              <li>
                <a>График
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </a>
                <ul class="submenu">
                  <li class="">
                    <input type="checkbox" id="all_schedule" value="Все" class="emp" checked="checked">
                    <label for="all_schedule">Все</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="full_schedule" value="Полный день" class="emp emp-type">
                    <label for="full_schedule">Полный день</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="flex_schedule" value="Гибкий график" class="emp emp-type">
                    <label for="flex_schedule">Гибкий график</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="shift_schedule" value="Сменный график" class="emp emp-type">
                    <label for="shift_schedule">Сменный график</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="remote_schedule" value="Удаленная работа" class="emp emp-type">
                    <label for="remote_schedule">Удаленная работа</label>
                  </li>
                  <li class="">
                    <input type="checkbox" id="vaxta_schedule" value="Вахтовый метод" class="emp emp-type">
                    <label for="vaxta_schedule">Вахтовый метод</label>
                  </li>
                  <input type="hidden" name="emp" id="emp" value="all">
                </ul>
              </li>

              <li>
                <a>Опыт работы
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </a>
                <ul class="submenu">
                  <li class="">
                    <input type="radio" name="exp" id="no_exp" value="0" checked="checked">
                    <label for="no_exp">Нет опыта</label>
                  </li>
                  <li class="">
                    <input type="radio" name="exp" id="exp_1-3" value="1">
                    <label for="exp_1-3">1-3</label>
                  </li>
                  <li class="">
                    <input type="radio" name="exp" id="exp_3-5" value="3">
                    <label for="exp_3-5">3-5</label>
                  </li>
                  <li class="">
                    <input type="radio" name="exp" id="exp_5+" value="5" >
                    <label for="exp_5+">5+</label>
                  </li>
                </ul>
              </li>

              <li>
                <a>Зарплата
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </a>
                <ul class="submenu">
                  <li class="">
                    <input type="radio" name="salary" id="pay_0" value="0" checked="checked">
                    <label for="pay_0">Любая</label>
                  </li>
                  <li class="">
                    <input type="radio" name="salary" id="pay_20" value="20">
                    <label for="pay_20">20,000+</label>
                  </li>
                  <li class="">
                    <input type="radio" name="salary" id="pay_40" value="40">
                    <label for="pay_40">40,000+</label>
                  </li>
                  <li class="">
                    <input type="radio" name="salary" id="pay_60" value="60">
                    <label for="pay_60">60,000+</label>
                  </li>
                  <li class="">
                    <input type="radio" name="salary" id="pay_80" value="80">
                    <label for="pay_80">80,000+</label>
                  </li>
                  <li class="">
                    <input type="radio" name="salary" id="pay_100" value="100">
                    <label for="pay_100">100,000+</label>
                  </li>
                  <li class="">
                    <input type="radio" name="salary" id="pay_120" value="120">
                    <label for="pay_120">120,000+</label>
                  </li>
                </ul>
              </li>

              <li>
                <a>Дата размещения
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </a>
                <ul class="submenu">
                  <li class="">
                    <input type="radio" name="posted" id="posted_1" value="1">
                    <label for="posted_1">24 часа</label>
                  </li>
                  <li class="">
                    <input type="radio" name="posted" id="posted_3" value="3">
                    <label for="posted_3">3 дня</label>
                  </li>
                  <li class="">
                    <input type="radio" name="posted" id="posted_7" value="7">
                    <label for="posted_7">7 дней</label>
                  </li>
                  <li class="">
                    <input type="radio" name="posted" id="posted_30" value="30" checked="checked">
                    <label for="posted_30">30 дней</label>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </form>
      </div>
    </div>
    <div class="pt-5" style="display:flex;">
      <div class="col-5 col-sm-5 col-md-5 col-xl-5 pb-4" >
        <div class="result-search">
          <?php
          foreach ($data as $el) {
            $key_skills=unserialize($el->key_skills);
          echo "<div class='okno' onclick='select_vac($el->id)'>
                  <div class='p-3'>
                    <h2>$el->vacancy</h2>
                    <span style='font-size:16px;'>$el->company</span><br>
                    <span style='font-size:16px;'>$el->city</span><br><ul style='padding-top:15px;'>";
                    foreach ($key_skills as $value) {
                      echo "<li style='padding-left:15px;font-size:16px;'>*$value</li>";
                    }
                  echo "</ul>
                  <span style='font-size:11px;'>Размещено $el->created_at | $el->type_employ | $el->schedule_work</span></div></div>";
          }
          ?>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-6 col-xl-6 pb-4">
        <div class="result-view" id="result-view">
          <!--Размещение текста-->
        </div>
      </div>
    </div>
  </main>
  <script>
        function select_vac(selectID){
          //alert(selectID);
          $.ajax({
             type:'POST',
             url:'/search_v/select',
             dataType : 'json',
             data: {
                  _token: '{!! csrf_token() !!}',
                  selectID: selectID,
                },
             success:function(data){
                $("#result-view").html(data.resultview);
             }
          });
       }
    </script>
  @extends('footer')
</body>
</html>
