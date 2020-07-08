@extends('reg')
@section('title-block')Регистрация для поиска работы@endsection
@section('hello_text')Приветственный, завлекающий текст@endsection
@section('save_form')
<form action = "save.blade.php" method="post">
  <div class="input-group">
    <h4>Блок 1</h4>
    <div class="input-group">
      <input type="text" placeholder="Электронная почта" data-qa="employer-registration-email" name="email" value="" class="form-control">
    </div>
    <div class="input-group">
      <input type="text" placeholder="Пароль" data-qa="employer-registration-email" name="password" value="" class="form-control">
    </div>
  </div>
  <div class="input-group">
    <h4>Блок 2</h4>
    <div class="input-group">
      <input type = "text" placeholder = "Имя" name = "name" class="form-control">
    </div>
    <div class="input-group">
      <input type = "text" placeholder = "Фамилия"  name="family" class="form-control">
    </div>
    <div class="input-group">
      <input type="tel" placeholder="Телефон" data-qa="employer-registration-phone-phoneFull" name="phoneFull" class="form-control">
    </div>
    <div class="input-group">
      <input type="text" data-qa="auth-employer__city-input" data-gaformstatistic-name="areaId" placeholder="Город" autocomplete="off" value="" class="form-control">
    </div>
    <div class="input-group">
      <input type="submit" value="Зарегистрироваться" class="btn btn-danger btn-lg">
    </div>
  </div>
</form>
@endsection
