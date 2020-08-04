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
  <script src="/js/app.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/create_form.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
      <div class="wrap-headder">
        <a href="/" class="masthead-brand" style="color:#bf2e1a">Get</a><a href="/employer" class="masthead-brand" style="color:#17a2b8;padding-left: 0;">Job</a>
      </div>
			<div class="wrap-login100">
        <form class="login100-form validate-form" action="{{route('ffstep_cv')}}" method="post">
          <div class="progress" style="width: 75%;	border-top: 10px solid #00FF00 ">
            @csrf
            <input type="hidden" name="name" value="{{ $name }}">
            <input type="hidden" name="company" value="{{ $company }}">
            <input type="hidden" name="vacancy" value="{{ $vacancy }}">
            <input type="hidden" name="city" value="{{ $city }}">
            <input type="hidden" name="phone" value="{{ $phone }}">
            <input type="hidden" name="type_employ" value="{{ $type_employ }}">
            <input type="hidden" name="schedule_work" value="{{ $schedule_work }}">
            <input type="hidden" name="min_salary" value="{{ $min_salary }}">
            <input type="hidden" name="currency" value="{{ $currency }}">
            <input type="hidden" name="job_salary_period" value="{{ $job_salary_period }}">
            <input type="hidden" id="radioFrm" name="radioFrm" value="radioTemplate">
            <?php
            foreach ($key_skills as $key => $value) {
              echo "<input type='hidden' name='key_skills[]' value='$value'>";
            }
            ?>
          </div>
					<span class="login100-form-title pb-5">
						Описание вакансии
					</span>
              <label style="color:black"><input id="radioTemplate" name="frm" type="radio" checked> Шаблон</label>
              <label style="color:black"><input id="radioFree" name="frm" type="radio"> Произвольная форма</label>
              <div class="pt-4" id="frm1">
                <div class="wrap-input100 validate-input">
                  <textarea rows="2" class="freeText input100" name="description_job"></textarea>
      						<span class="focus-input100" data-placeholder="Описание работы"></span>
                </div>

                <div class="wrap-input100 validate-input">
                  <textarea class="freeText input100" name="duties"></textarea>
      						<span class="focus-input100" data-placeholder="Обязаности"></span>
                </div>

      					<div class="wrap-input100 validate-input">
                  <textarea class="freeText input100" name="requirements"></textarea>
      						<span class="focus-input100" data-placeholder="Требования"></span>
      					</div>
                <div class="wrap-input100 validate-input">
                  <textarea class="freeText input100" name="requirements_optional"></textarea>
      						<span class="focus-input100" data-placeholder="Требования (необязательные)"></span>
      					</div>

                <div class="wrap-input100 validate-input">
                  <textarea class="freeText input100" name="if"></textarea>
      						<span class="focus-input100" data-placeholder="Условия"></span>
      					</div>
                <div class="wrap-input100 validate-input">
                  <textarea class="freeText input100" name="additionally"></textarea>
      						<span class="focus-input100" data-placeholder="Дополнительная инфа"></span>
      					</div>
              </div>

              <div class="pt-4" id="frm2" hidden>
                <div class="wrap-input100 validate-input">
      						<textarea class="freeText input100" id="free" name="freeText"></textarea>
      						<span class="focus-input100" data-placeholder="Скопируйте заготовленный текст"></span>
      					</div>
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
  <script src="/js/autosize.js"> </script>
  <script>
    //
    document.getElementById('radioTemplate').onclick = function() {
      document.getElementById('frm2').hidden = true;
      document.getElementById('frm1').hidden = false;
      document.getElementById('radioFrm').value = "radioTemplate";
    }
    document.getElementById('radioFree').onclick = function() {
      document.getElementById('frm1').hidden = true;
      document.getElementById('frm2').hidden = false;
      document.getElementById('radioFrm').value = "radioFree";
    }
    window.autosize = window.autosize ? window.autosize :'autosize';
    autosize(document.querySelectorAll('textarea'));
  </script>


</body>
</html>
