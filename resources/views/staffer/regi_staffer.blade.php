@extends('layouts.layout_reg')
@section('title-block')Регистрация для поиска работы@endsection
@section('hello_text')Регистрация@endsection
@section('save_form')
<form action="{{route('reg_emplyer_submit')}}" method="post">
  @csrf
  <div class="form-group">
    <p><label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email"></p>
  </div>
  <div class="form-group">
    <label for="passinput">Пароль</label>
    <input type="password" class="form-control" id="passinput" name="passinput" placeholder="Пароль">
  </div>
  <button type="button" name="button" onclick="return showpass();">Показать пароль</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
