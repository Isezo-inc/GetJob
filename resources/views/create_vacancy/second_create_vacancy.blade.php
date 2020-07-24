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
	<link rel="stylesheet" type="text/css" href="/css/create_form.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form" action="{{route('tstep_cv')}}" method="post">
        @csrf
        <div class="">
          <input type="hidden" name="name" value="{{ $name }}">
          <input type="hidden" name="company" value="{{ $company }}">
          <input type="hidden" name="vacancy" value="{{ $vacancy }}">
          <input type="hidden" name="city" value="{{ $city }}">
          <input type="hidden" name="phone" value="{{ $phone }}">
        </div>
				<span class="login100-form-title pb-5">
					Детали вакансии
				</span>

        <div class="wrap-input100 validate-input" data-validate = "Выберите тип трудоустройства">

          <datalist id="type_employ" name="type_employ">
            <option value="Полная занятность"></option>
            <option value="Частичная занятность"></option>
            <option value="Проектная/временная работа"></option>
            <option value="Стажеровка"></option>
          </datalist>
          <input class="input100" name="type_employ" list="type_employ">
          <span class="focus-input100" data-placeholder="Выберите тип трудоустройства"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Выберите график">
          <datalist id="schedule_work" name="schedule_work">
            <option value="Полный день"></option>
            <option value="Гибкий график"></option>
            <option value="Сменный график"></option>
            <option value="Удаленная работа"></option>
            <option value="Вахтовый метод"></option>
          </datalist>
          <input class="input100" name="schedule_work" list="schedule_work">
          <span class="focus-input100" data-placeholder="Выберите график"></span>
				</div>


        <span> Заработная плата</span>
				<div class="wrap-input100 validate-input" style="display:flex;margin-bottom: 0;" data-validate = "Укажите зарплату">
          <input class="input100" type="number" placeholder="25000"  step="1000" min="0" name="min_salary">
          <span class="focus-input100"></span>
          <input class="input100 collapse" id="Salary12" type="number" placeholder="35000" step="1000" min="1000" name="max_salary">
          <select class="input100" name="currency">
            <option value="rubl">руб</option>
            <option value="dollar">USD</option>
            <option value="dollar">EUR</option>
          </select>

          <select class="input100" name="jobsalaryperiod">
            <option value="HOUR">В час</option>
            <option value="DAY">В день</option>
            <option value="WEEK">В неделю</option>
            <option value="MOUNT" selected>В месяц</option>
            <option value="YEAR">В год</option>
          </select>

				</div>
        <a class="btn btn-link" data-toggle="collapse" data-target="#Salary12" style="margin-bottom: 37px;">Указать диапазон</a>



        <div class="wrap-input100 validate-input" data-validate = "Это поле не должно быть пустым">
					<input class="input100" type="textarea" name="key_skills" value="">
					<span class="focus-input100" data-placeholder="Ключевые навыки"></span>
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
	<script src="/js/create_form.js"></script>
</body>
</html>
