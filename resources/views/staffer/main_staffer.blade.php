@extends('head')

@section('title-block')
Поиск работы
@endsection

@section('style')
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="/css/app.css">
@endsection

@section('content')
  @include('staffer.header_staffer')
  <main role="main" class="mt-5">
    <div class="container-fluid" id="img">
      <div class="col-lg-ofsset-2" style= "padding-top:7%;">
        <h1 class="text-info">Найти работу просто</h1>
        <form class="" action="#" method="post">
          <div class="container-fluid">
            <div class="form-inline">
              <input type="text" class="form-control" placeholder="Должность" name="job" value="">
              <input type="text" class="form-control" placeholder="Город" name="city" value="">
              <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#more">Доп.</button>
            </div>

    <div id="more" class="form-inline collapse">
        <input type="text" class="form-control" placeholder="Зарплата" name="salary" value="">
        <input type="text" class="form-control" placeholder="опыт" name="experience" value="">
        <input type="text" class="form-control" placeholder="Должность" name="job" value="">
    </div>

          </div>
          <button type="button" name="button" class="btn-info btn-lg">Найти</button>
        </form>
      </div>

        <div class="container">

        </div>
      </div>
    </main>
@endsection
