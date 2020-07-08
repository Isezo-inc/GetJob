@extends('layout')

@section('title-block')Поиск работы@endsection

@section('style')  <link rel = "stylesheet" href="/css/app.css">@endsection

@section('head')@include('staffer.header_staffer')@endsection

@section('button_block1')
<button type="button" name="button" class="btn btn-danger btn-lg btn-cr">Создать резюме</button>
@endsection
@section('search')
<h1 class="text">Найти работу просто</h1>
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
  <button type="button" name="button" class="btn btn-danger btn-lg">Найти</button>
</form>
@endsection
