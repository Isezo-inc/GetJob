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
	<link rel="stylesheet" type="text/css" href="/css/create_form.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
        @csrf
        <div class="">
          <form class="login100-form validate-form" action="{{route('sstep_cv')}}" method="post">
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
          <input type="hidden" name="description_job" value="{{ $description_job }}">
          <input type="hidden" name="duties" value="{{ $duties }}">
          <input type="hidden" name="requirements" value="{{ $requirements }}">
          <input type="hidden" name="requirements_optional" value="{{ $requirements_optional }}">
          <input type="hidden" name="if" value="{{ $if }}">
          <input type="hidden" name="additionally" value="{{ $additionally }}">
        </form>
        </div>
        <div class="data-display-container bloc">
          <div class="col big pb-3">
            <strong class="font-weight-bold">{{ $vacancy }}</strong>
            <p>{{ $company }} - {{ $city }}</p>
            <p>{{ $min_salary }} {{ $currency }} в {{ $jobsalaryperiod }}</p>
            <button type="button" class="btn btn-outline-primary" name="button">Откликнуть на вакансию</button>
          </div>
          <div class="tabs tabs-border">
            <a class="active tab" href="">Детали вакансии</a>
            <a class="tab" href="">О компании</a>
            <div class="fl-r">
              <a href="#">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
              </a>
            </div>
          </div>

          <div class="col big" style="padding-top:30px">
            <p>{{ $description_job }}</p>
            <br><strong>Обязаности</strong>
            <ul>
              <li><p>{{ $duties }}</p></li>
            </ul>
            <br><strong>Требования</strong><br>
            <ul>
              <li>{{ $requirements }}</li>
            </ul>
            <br><strong>Было бы здорово</strong><br>
            <ul>
              <li>{{ $requirements_optional }}</li>
            </ul>
            <br><strong>Условия</strong><br>
            <ul>
              <li>{{ $if }}</li>
            </ul>
            <p></p><br>
            <ul>
              <li> {{ $additionally }}</li>
            </ul>
          </div>
        </div>
  		</div>
  	</div>
  </div>
	<script src="/js/create_form.js"></script>
</body>
</html>
