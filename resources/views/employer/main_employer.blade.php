@extends('layouts.layout_main_window')

@section('title-block')Поиск сотрудника@endsection

@section('style')<link rel = "stylesheet" href="css/employer.css">@endsection

@section('head')@include('employer.header_new_employer')@endsection

@section('button_block1')<button type="button" name="button" class="btn btn-info btn-lg btn-cr">Создать вакансию</button>@endsection

@section('search')
<h1 class="text">Поиск резюме</h1>
<form class="" action="#" method="post">
  <div class="container-fluid">
    <div class="form-inline">
      <input type="text" class="form-control" placeholder="Должность" name="job" value="">
      <input type="text" class="form-control" placeholder="Город" name="city" value="">
      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#more">Доп.</button>
    </div>
    <div id="more" class="form-inline collapse">
      <input type="text" class="form-control" placeholder="Зарплата" name="salary" value="">
      <input type="text" class="form-control" placeholder="Опыт" name="experience" value="">
      <input type="text" class="form-control" placeholder="Должность" name="job" value="">
    </div>
  </div>
  <button type="button" name="button" class="btn btn-info btn-lg">Найти</button>
</form>
@endsection
