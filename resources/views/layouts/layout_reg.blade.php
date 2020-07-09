<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel = "stylesheet" href="/css/registration.css">
  <script type="text/javascript" src="{{mix('js/staffer.js')}}"></script>
  <title>@yield('title-block')</title>
</head>
<body style="background-attachment: fixed; background-image: linear-gradient(to left top, #17a2b8, #4ab8b1, #80cba7, #b7dba2, #eee8a9);">
  <div class="container-fluid" style="padding-top:5%;text-align: center;">
    <div class="container">
      <h2 style="padding-bottom:4%;">@yield('hello_text')</h2>
      @yield('save_form')
      <p>Условие регистрации</p>
    </div>
  </div>
</body>
</html>
