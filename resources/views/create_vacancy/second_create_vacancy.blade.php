<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Размещение вакансии</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/create_form.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container-login100">
    <div class="wrap-headder">
      <a href="/" class="masthead-brand" style="color:#bf2e1a">Get</a><a href="/employer" class="masthead-brand" style="color:#17a2b8;padding-left: 0;">Job</a>
    </div>
		<div class="wrap-login100">
			<form class="login100-form validate-form" action="{{route('tstep_cv')}}" method="post">
        @csrf
        <div class="progress" style="width: 50%;	border-top: 10px solid #FFCC00">
          <input type="hidden" name="name" value="{{ $name }}">
          <input type="hidden" name="company" value="{{ $company }}">
          <input type="hidden" name="vacancy" value="{{ $vacancy }}">
          <input type="hidden" name="city" value="{{ $city }}">
          <input type="hidden" name="phone" value="{{ $phone }}">
        </div>
				<span class="login100-form-title pb-5">
					Детали вакансии
				</span>

        <div class="wrap-input100 validate-input">
          <label for="type_employ">Выберите тип трудоустройства</label>
          <select class="js-example-placeholder-single input100" id="type_employ" name="type_employ" required oninvalid="this.setCustomValidity('Выберите из спика')" oninput="setCustomValidity('')">
            <option value=""></option>
            <option value="Полная занятность">Полная занятность</option>
            <option value="Частичная занятность">Частичная занятность</option>
            <option value="Проектная/временная работа">Проектная/временная работа</option>
            <option value="Стажеровка">Стажеровка</option>
          </select>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input">
          <label for="schedule_work">Выберите график</label>
          <select class="js-example-placeholder-single  input100" id="schedule_work" name="schedule_work" required oninvalid="this.setCustomValidity('Выберите из спика')" oninput="setCustomValidity('')">
            <option value=""></option>
            <option value="Полный день">Полный день</option>
            <option value="Гибкий график">Гибкий график</option>
            <option value="Сменный график">Сменный график</option>
            <option value="Удаленная работа">Удаленная работа</option>
            <option value="Вахтовый метод">Вахтовый метод</option>
          </select>
          <span class="focus-input100"></span>
				</div>

        <label for="salary">Заработная плата</label>
				<div class="wrap-input100 validate-input" id="salary" style="display:flex;margin-bottom: 0;">
          <input class="input100" type="number" placeholder="25000" name="min_salary" required oninvalid="this.setCustomValidity('Нужно указать размер зарплаты')" oninput="setCustomValidity('')">
          <span class="focus-input100"></span>
          <!--<input class="input100 collapse" id="Salary12" type="number" placeholder="35000" step="1000" min="1000" name="max_salary">-->
          <select class="input100" name="currency">
            <option value="₽">руб</option>
            <option value="$">USD</option>
            <option value="€">EUR</option>
          </select>

          <select class="input100" name="job_salary_period">
            <option value="час">В час</option>
            <option value="день">В день</option>
            <option value="неделю">В неделю</option>
            <option value="месяц" selected>В месяц</option>
            <option value="год">В год</option>
          </select>

				</div>
        <a class="btn btn-link disabled" data-toggle="collapse" data-target="#Salary12" style="margin-bottom: 37px;">Указать диапазон</a>

        <div class="wrap-input100 validate-input">
          <label for="qq">Ключевые навыки</label>
          <select class="js-example-tags input100" id="qq" name="key_skills[]" multiple required oninvalid="this.setCustomValidity('Укажите хотя бы один ключевой навык')" oninput="setCustomValidity('')">
            <option value=""></option>
          </select>
					<span class="focus-input100"></span>
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
  <!-- хз для чего
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<script src="/js/create_form.js"></script>
  <script>
  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
    $(".js-example-placeholder-single").select2({
      placeholder: "",
      minimumResultsForSearch: Infinity
    });
    $(".js-example-tags").select2({
      tags: true,
      placeholder: ""
    });
  });
  </script>
</body>
</html>
