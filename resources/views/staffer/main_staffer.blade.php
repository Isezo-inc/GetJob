@extends('layouts.layout_main_window')

@section('title-block')Поиск работы@endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link rel = "stylesheet" href="/css/staffer.css">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
      $('.js-example-basic-multiple').select2({
        placeholder:"Город",
        width:'resolve'
      });
  });
</script>
@endsection

@section('head')@include('staffer.header_staffer')@endsection

@section('search')
<div class="hero-txt">
  <h1 class="text pl-5">Find<br>JOBS</h1>
</div>
<form class="" action="#" method="post">
<div class="container-fluid">

  <div class="form-inline">
    <div class="col-12 col-sm-12 col-md-12 col-xl-5 pb-4">
      <input type="text" class="form-control" placeholder="Должность" name="job" value="">
    </div>
    <div class="col-12 col-sm-6 col-md-9 col-xl-5 pb-4">
      <select class="js-example-basic-multiple form-control" placeholder="Город" name="city[]" multiple="multiple" style="width:100%;">
        <option value="AL">Город 1</option>
        <option value="WY">Город 2</option>
      </select>
    </div>
    <div class="col-12 col-sm-6 col-md-3 col-xl-2 pb-4">
      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#more">Доп.</button>
      <button type="button" name="button" class="btn btn-danger btn-lg">Найти</button>
    </div>
  </div>

  <div id="more" class="form-inline collapse">
    <input type="text" class="form-control" placeholder="Зарплата" name="salary" value="">
    <input type="text" class="form-control" placeholder="опыт" name="experience" value="">
    <input type="text" class="form-control" placeholder="Должность" name="job" value="">
  </div>
</div>
</form>
@endsection

@section('popular-jobs')
<div class="p-5">
  <h2 class="mb-4 text-dark">Популярные должности</h2>
  <div class="swipe3 swiper-container swiper-container-horizontal">
    <div class="swiper-wrapper">

      <div class="job-slider swiper-slide swiper-slide">
          <div class="mpj-description">
            <div class="mpj-description-title">
              <a href="" data-tn-link="">Водитель такси</a>
            </div>
            <div class="mpj-description-ads">
              <a href="" data-tn-link="">добавлены данные о 302008 зарплатах</a>
            </div>
            <div class="mpj-description-salary">
              <a href="" data-tn-link="">
                <span class="mpj-description-salary-average">64712 руб. </span>
                <span class="">/ месяц</span>
              </a>
            </div>
          </div>

          <div class="diagram">
            <a href="" data-tn-link="">
              <ul class="ul-diagram">
                <li style="height:5.54226427203834%; width:9.0%; left:0.0%;" class="li-diagram"></li>
                <li style="height:37.39897491593386%; width:9.0%; left:10.0%;" class="li-diagram"></li>
                <li style="height:78.28781111374563%; width:9.0%; left:20.0%;" class="li-diagram"></li>
                <li style="height:90.0%; width:9.0%; left:30.0%;" class="li-diagram li-diagram-highlight"></li>
                <li style="height:74.52946518342867%; width:9.0%; left:40.0%;" class="li-diagram"></li>
                <li style="height:51.06403045627907%; width:9.0%; left:50.0%;" class="li-diagram"></li>
                <li style="height:31.229680765947837%; width:9.0%; left:60.0%;" class="li-diagram"></li>
                <li style="height:17.818605130108903%; width:9.0%; left:70.0%;" class="li-diagram"></li>
                <li style="height:9.74448604747804%; width:9.0%; left:80.0%;" class="li-diagram"></li>
                <li style="height:5.195964529759%; width:9.0%; left:90.0%;" class="li-diagram"></li>
              </ul>
              <div class="min-salary">19000 руб.</div>
              <div class="max-salary">136000 руб.</div>
            </a>
          </div>
      </div>





      <div class="job-slider swiper-slide swiper-slide">
          <div class="mpj-description">
            <div class="mpj-description-title">
              <a href="" data-tn-link="">Водитель такси</a>
            </div>
            <div class="mpj-description-ads">
              <a href="" data-tn-link="">добавлены данные о 302008 зарплатах</a>
            </div>
            <div class="mpj-description-salary">
              <a href="" data-tn-link="">
                <span class="mpj-description-salary-average">64712 руб. </span>
                <span class="">/ месяц</span>
              </a>
            </div>
          </div>

          <div class="diagram">
            <a href="" data-tn-link="">
              <ul class="ul-diagram">
                <li style="height:5.54226427203834%; width:9.0%; left:0.0%;" class="li-diagram"></li>
                <li style="height:37.39897491593386%; width:9.0%; left:10.0%;" class="li-diagram"></li>
                <li style="height:78.28781111374563%; width:9.0%; left:20.0%;" class="li-diagram"></li>
                <li style="height:90.0%; width:9.0%; left:30.0%;" class="li-diagram li-diagram-highlight"></li>
                <li style="height:74.52946518342867%; width:9.0%; left:40.0%;" class="li-diagram"></li>
                <li style="height:51.06403045627907%; width:9.0%; left:50.0%;" class="li-diagram"></li>
                <li style="height:31.229680765947837%; width:9.0%; left:60.0%;" class="li-diagram"></li>
                <li style="height:17.818605130108903%; width:9.0%; left:70.0%;" class="li-diagram"></li>
                <li style="height:9.74448604747804%; width:9.0%; left:80.0%;" class="li-diagram"></li>
                <li style="height:5.195964529759%; width:9.0%; left:90.0%;" class="li-diagram"></li>
              </ul>
              <div class="min-salary">19000 руб.</div>
              <div class="max-salary">136000 руб.</div>
            </a>
          </div>
      </div>
      <div class="job-slider swiper-slide swiper-slide">
          <div class="mpj-description">
            <div class="mpj-description-title">
              <a href="" data-tn-link="">Водитель такси</a>
            </div>
            <div class="mpj-description-ads">
              <a href="" data-tn-link="">добавлены данные о 302008 зарплатах</a>
            </div>
            <div class="mpj-description-salary">
              <a href="" data-tn-link="">
                <span class="mpj-description-salary-average">64712 руб. </span>
                <span class="">/ месяц</span>
              </a>
            </div>
          </div>

          <div class="diagram">
            <a href="" data-tn-link="">
              <ul class="ul-diagram">
                <li style="height:5.54226427203834%; width:9.0%; left:0.0%;" class="li-diagram"></li>
                <li style="height:37.39897491593386%; width:9.0%; left:10.0%;" class="li-diagram"></li>
                <li style="height:78.28781111374563%; width:9.0%; left:20.0%;" class="li-diagram"></li>
                <li style="height:90.0%; width:9.0%; left:30.0%;" class="li-diagram li-diagram-highlight"></li>
                <li style="height:74.52946518342867%; width:9.0%; left:40.0%;" class="li-diagram"></li>
                <li style="height:51.06403045627907%; width:9.0%; left:50.0%;" class="li-diagram"></li>
                <li style="height:31.229680765947837%; width:9.0%; left:60.0%;" class="li-diagram"></li>
                <li style="height:17.818605130108903%; width:9.0%; left:70.0%;" class="li-diagram"></li>
                <li style="height:9.74448604747804%; width:9.0%; left:80.0%;" class="li-diagram"></li>
                <li style="height:5.195964529759%; width:9.0%; left:90.0%;" class="li-diagram"></li>
              </ul>
              <div class="min-salary">19000 руб.</div>
              <div class="max-salary">136000 руб.</div>
            </a>
          </div>
      </div>
      <div class="job-slider swiper-slide swiper-slide">
          <div class="mpj-description">
            <div class="mpj-description-title">
              <a href="" data-tn-link="">Водитель такси</a>
            </div>
            <div class="mpj-description-ads">
              <a href="" data-tn-link="">добавлены данные о 302008 зарплатах</a>
            </div>
            <div class="mpj-description-salary">
              <a href="" data-tn-link="">
                <span class="mpj-description-salary-average">64712 руб. </span>
                <span class="">/ месяц</span>
              </a>
            </div>
          </div>

          <div class="diagram">
            <a href="" data-tn-link="">
              <ul class="ul-diagram">
                <li style="height:5.54226427203834%; width:9.0%; left:0.0%;" class="li-diagram"></li>
                <li style="height:37.39897491593386%; width:9.0%; left:10.0%;" class="li-diagram"></li>
                <li style="height:78.28781111374563%; width:9.0%; left:20.0%;" class="li-diagram"></li>
                <li style="height:90.0%; width:9.0%; left:30.0%;" class="li-diagram li-diagram-highlight"></li>
                <li style="height:74.52946518342867%; width:9.0%; left:40.0%;" class="li-diagram"></li>
                <li style="height:51.06403045627907%; width:9.0%; left:50.0%;" class="li-diagram"></li>
                <li style="height:31.229680765947837%; width:9.0%; left:60.0%;" class="li-diagram"></li>
                <li style="height:17.818605130108903%; width:9.0%; left:70.0%;" class="li-diagram"></li>
                <li style="height:9.74448604747804%; width:9.0%; left:80.0%;" class="li-diagram"></li>
                <li style="height:5.195964529759%; width:9.0%; left:90.0%;" class="li-diagram"></li>
              </ul>
              <div class="min-salary">19000 руб.</div>
              <div class="max-salary">136000 руб.</div>
            </a>
          </div>
      </div>
      <div class="job-slider swiper-slide swiper-slide">
          <div class="mpj-description">
            <div class="mpj-description-title">
              <a href="" data-tn-link="">Водитель такси</a>
            </div>
            <div class="mpj-description-ads">
              <a href="" data-tn-link="">добавлены данные о 302008 зарплатах</a>
            </div>
            <div class="mpj-description-salary">
              <a href="" data-tn-link="">
                <span class="mpj-description-salary-average">64712 руб. </span>
                <span class="">/ месяц</span>
              </a>
            </div>
          </div>

          <div class="diagram">
            <a href="" data-tn-link="">
              <ul class="ul-diagram">
                <li style="height:5.54226427203834%; width:9.0%; left:0.0%;" class="li-diagram"></li>
                <li style="height:37.39897491593386%; width:9.0%; left:10.0%;" class="li-diagram"></li>
                <li style="height:78.28781111374563%; width:9.0%; left:20.0%;" class="li-diagram"></li>
                <li style="height:90.0%; width:9.0%; left:30.0%;" class="li-diagram li-diagram-highlight"></li>
                <li style="height:74.52946518342867%; width:9.0%; left:40.0%;" class="li-diagram"></li>
                <li style="height:51.06403045627907%; width:9.0%; left:50.0%;" class="li-diagram"></li>
                <li style="height:31.229680765947837%; width:9.0%; left:60.0%;" class="li-diagram"></li>
                <li style="height:17.818605130108903%; width:9.0%; left:70.0%;" class="li-diagram"></li>
                <li style="height:9.74448604747804%; width:9.0%; left:80.0%;" class="li-diagram"></li>
                <li style="height:5.195964529759%; width:9.0%; left:90.0%;" class="li-diagram"></li>
              </ul>
              <div class="min-salary">19000 руб.</div>
              <div class="max-salary">136000 руб.</div>
            </a>
          </div>
      </div>
      <div class="job-slider swiper-slide swiper-slide">
          <div class="mpj-description">
            <div class="mpj-description-title">
              <a href="" data-tn-link="">Водитель такси</a>
            </div>
            <div class="mpj-description-ads">
              <a href="" data-tn-link="">добавлены данные о 302008 зарплатах</a>
            </div>
            <div class="mpj-description-salary">
              <a href="" data-tn-link="">
                <span class="mpj-description-salary-average">64712 руб. </span>
                <span class="">/ месяц</span>
              </a>
            </div>
          </div>

          <div class="diagram">
            <a href="" data-tn-link="">
              <ul class="ul-diagram">
                <li style="height:5.54226427203834%; width:9.0%; left:0.0%;" class="li-diagram"></li>
                <li style="height:37.39897491593386%; width:9.0%; left:10.0%;" class="li-diagram"></li>
                <li style="height:78.28781111374563%; width:9.0%; left:20.0%;" class="li-diagram"></li>
                <li style="height:90.0%; width:9.0%; left:30.0%;" class="li-diagram li-diagram-highlight"></li>
                <li style="height:74.52946518342867%; width:9.0%; left:40.0%;" class="li-diagram"></li>
                <li style="height:51.06403045627907%; width:9.0%; left:50.0%;" class="li-diagram"></li>
                <li style="height:31.229680765947837%; width:9.0%; left:60.0%;" class="li-diagram"></li>
                <li style="height:17.818605130108903%; width:9.0%; left:70.0%;" class="li-diagram"></li>
                <li style="height:9.74448604747804%; width:9.0%; left:80.0%;" class="li-diagram"></li>
                <li style="height:5.195964529759%; width:9.0%; left:90.0%;" class="li-diagram"></li>
              </ul>
              <div class="min-salary">19000 руб.</div>
              <div class="max-salary">136000 руб.</div>
            </a>
          </div>
      </div>


    </div>
    <div class="swiper-pagination swiper-pagination-bullets"></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
  </div>
</div>

<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 20,
    touchRatio: 2,
    slidesPerGroup: 3,
    loop: true,
    grabCursor: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>
@endsection

@section('qwe')
<section class="flex flex-wrap p-1 ">
  <header class="p-2">
    <h2 class="pl-5 mb-0 -ml-1 flex-1-hack text-dark">Создать</h2>
  </header>
  <article class="org-card green-card" style="float:left;">
    <a href="#" class="org-container">
      <img alt="Going to a job interview? This is how you can get ready" src="https://promdevelop.ru/wp-content/uploads/sostavit-rezyume-na-rabotu-obrazets-2017.png">
      <div class="org-shade"></div>
      <div class="org-info">
        <h4 class="text-white text-xs uppercase mb-2">Создать резюме</h4>
      </div>
    </a>
  </article>
  <article class="org-card green-card" style="float:right;">
    <a href="#" class="org-container">
      <img alt="Starting a new job? Keep these in mind" src="https://vplanning.ru/wp-content/uploads/2017/11/vacancy.jpg">
      <div class="org-shade"></div>
      <div class="org-info">
        <h4 class="text-white text-xs uppercase mb-2">Создать вакансию</h4>
      </div>
    </a>
  </article>
</section>
@endsection

@section('footer')
<footer style="margin-top: 5rem;">
  <div class="container position-relative">
    <ul class="nav nav-footer">
      <li class="nav-link">
        <a class="footer-links" href="/user-agreement">
        Условия использования
        </a>
      </li>
      <li class="nav-link">
        <a class="footer-links" href="/privacy-policy">
        Конфиденциальность
        </a>
      </li>
      <li class="nav-link">
        <a class="footer-links" href="/make-contribution">
        Внести вклад в развитие
        </a>
      </li>
      <li class="nav-link">
        <a class="footer-links" href="/about">
        О сайте
        </a>
      </li>
    </ul>
    <span class="copyright">© GetJob, 2020 - н.в.</span><br>
    <span class="contact">E-mail: GetJob@mail.ru</span><br>
    <span class="copyright-rules">тутутутуутутуууууууууууу </span>
  </div>
</footer>
@endsection
