@extends('layouts.layout_reg')
@section('title-block')Регистрация соискателя@endsection
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
          @csrf
					<span class="login100-form-title pb-5">
            Регистрация соискателя
					</span>
          <div class="wrap-input100 validate-input" data-validate = "Введите имя">
            <input class="input100" type="text" name="fname" id="fname">
            <span class="focus-input100" data-placeholder="Имя"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Введите фамилию">
            <input class="input100" type="text" name="sname" id="sname">
            <span class="focus-input100" data-placeholder="Фамилия"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Введите эл. почту" style="border-bottom: 2px solid red;" id="emailvalidate">
            <input class="input100" type="email" name="email" id="email">
            <span class="focus-input100" data-placeholder="Эл. почта"></span>
          </div>
          <div id="msg"></div>
          <div class="wrap-input100 validate-input" data-validate="Введите пароль">
          		<span class="btn-show-pass">
          		   <i class="zmdi zmdi-eye"></i>
          		</span>
          		<input class="input100" type="password" name="pass" id="pass">
          		<span class="focus-input100" data-placeholder="Пароль"></span>
          </div>
          <div class="text-center">
            <span class="txt1">
              Нажимая кнопку «Зарегистрироваться», вы принимаете
            </span>
            <a class="txt2" href="{{route('reg_staffer')}}">
              условия сайта
            </a>
            <span class="txt1">
              а также
            </span>
            <a class="txt2" href="{{route('reg_staffer')}}">
              политику конфиденциальности
            </a>
          </div>
        </form>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="getMessage()" name="button" id="button">
								Зарегистрироваться
							</button>
						</div>
					</div>

          <div class="text-center" style="padding-top:115px;">
						<a class="txt2" href="{{route('reg_staffer')}}">
              Ищете сотрудников?
						</a>
					</div>
			</div>
		</div>
	</div>
  <form id="mailsendform" action="{{route('sendmail')}}" method="post">
    @csrf
  <input type="hidden" name="toemail" id="toemail">
</form>
  @endsection
