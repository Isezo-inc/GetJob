<!--Фаил окна создания вакансии-->
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Размещение вакансии</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/create_form.css')}}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('sstep_cv')}}" method="post">
          @csrf
					<span class="login100-form-title pb-5">
						Разместить вакансию
					</span>
          <div class="wrap-input100 validate-input" data-validate = "Введите имя">
            <input class="input100" type="text" name="name">
            <span class="focus-input100" data-placeholder="Ваше имя"></span>
          </div>

					<div class="wrap-input100 validate-input" data-validate = "Введите название компании">
						<input class="input100" type="text" name="company">
						<span class="focus-input100" data-placeholder="Название компании"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Введите должность">
						<input class="input100" type="text" name="vacancy">
						<span class="focus-input100" data-placeholder="Должность"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Введите город">
						<input class="input100" type="text" name="city">
						<span class="focus-input100" data-placeholder="Город"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Введите номер телефона">
            <input class="input100" type="text" name="phone">
            <span class="focus-input100" data-placeholder="Номер телефона"></span>
          </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Далее
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="/js/create_form.js"></script>
</body>
</html>
