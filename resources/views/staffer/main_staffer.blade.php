@extends('layouts.layout_main_window')

@section('title-block')Поиск работы@endsection

@section('style')  <link rel = "stylesheet" href="/css/app.css">@endsection

@section('head')@include('staffer.header_staffer')@endsection

<!--@section('button_block1')
<button type="button" name="button" class="btn btn-danger btn-lg btn-cr">Создать резюме</button>
@endsection-->
@section('search')
<div class="hero-txt">
  <h1 class="text">Найти работу просто</h1>
</div>
<form class="" action="#" method="post">
<div class="container-fluid">


  <div class="form-inline">
    <input type="text" class="form-control" placeholder="Должность" name="job" value="">
    <input type="text" class="form-control" placeholder="Город" name="city" value="">
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#more">Доп.</button>
      <button type="button" name="button" class="btn btn-danger btn-lg">Найти</button>
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


  <!-- Initialize Swiper -->
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
