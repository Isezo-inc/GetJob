@extends('layouts.layout_login')
@section('title-block')Вход в личный кабинет@endsection
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('sstep_cv')}}" method="post">
          @csrf
					<span class="login100-form-title pb-5">
            Вход в личный кабинет
					</span>
          <div class="wrap-input100 validate-input" data-validate = "Введите эл. почту">
            <input class="input100" type="email" name="email">
            <span class="focus-input100" data-placeholder="Эл. почта"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Enter password">
          		<span class="btn-show-pass">
          		   <i class="zmdi zmdi-eye"></i>
          		</span>
          		<input class="input100" type="password" name="pass">
          		<span class="focus-input100" data-placeholder="Пароль"></span>
          </div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Войти
							</button>
						</div>
					</div>
          <div class="text-center">
						<a class="txt2" href="{{route('reg_staffer')}}">
              Забыли пароль?
						</a>
					</div>
          <div class="text-center" style="padding-top:115px;">
						<span class="txt1">
							Еще нет аккаунта?
						</span>
						<a class="txt2" href="{{route('reg_staffer')}}">
							Зарегистрироваться
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
