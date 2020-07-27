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
	<link rel="stylesheet" type="text/css" href="css/create_form.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
          <div class="">
            <input type="hidden" name="name" value="{{ $name }}">
            <input type="hidden" name="company" value="{{ $company }}">
            <input type="hidden" name="vacancy" value="{{ $vacancy }}">
            <input type="hidden" name="city" value="{{ $city }}">
            <input type="hidden" name="phone" value="{{ $phone }}">
            <input type="hidden" name="type_employ" value="{{ $type_employ }}">
            <input type="hidden" name="schedule_work" value="{{ $schedule_work }}">
            <input type="hidden" name="min_salary" value="{{ $min_salary }}">
            <input type="hidden" name="currency" value="{{ $currency }}">
            <input type="hidden" name="jobsalaryperiod" value="{{ $jobsalaryperiod }}">
            <input type="hidden" name="key_skills" value="{{ $key_skills }}">
          </div>
					<span class="login100-form-title pb-5">
						Описание вакансии
					</span>
              <label><input name="frm" type="radio"  checked> Шаблон</label>
              <label><input name="frm" type="radio" onclick=""> Произвольная форма</label>
              <div id="frm1">
                <div class="wrap-input100 validate-input" data-validate = "Это поле не должно быть пустым">
                  <input class="input100" type="textarea" name="description_job">
      						<span class="focus-input100" data-placeholder="Описание работы"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Это поле не должно быть пустым">
                  <input class="input100" type="textarea" name="duties">
      						<span class="focus-input100" data-placeholder="Обязаности"></span>
                </div>

      					<div class="wrap-input100 validate-input" data-validate = "Это поле не должно быть пустым">
                  <input class="input100" type="textarea" name="requirements">
      						<span class="focus-input100" data-placeholder="Требования"></span>
      					</div>
                <div class="wrap-input100 validate-input" data-validate = "Это поле не должно быть пустым">
                  <input class="input100" type="textarea" name="requirements_optional">
      						<span class="focus-input100" data-placeholder="Требования (необязательные)"></span>
      					</div>

                <div class="wrap-input100 validate-input" data-validate = "Это поле не должно быть пустым">
      						<input class="input100" type="textarea" name="if">
      						<span class="focus-input100" data-placeholder="Условия"></span>
      					</div>
                <div class="wrap-input100 validate-input" data-validate = "Это поле не должно быть пустым">
      						<input class="input100" type="textarea" name="additionally">
      						<span class="focus-input100" data-placeholder="Дополнительная инфа"></span>
      					</div>

      					<div class="container-login100-form-btn">
      						<div class="wrap-login100-form-btn">
      							<div class="login100-form-bgbtn"></div>
      							<button class="login100-form-btn">
      								Далее
      							</button>
      						</div>
      					</div>
              </div>

              <div id="frm2" hidden>

              </div>

				</form>
			</div>
		</div>
	</div>
	<script src="js/create_form.js"></script>
</body>
</html>
