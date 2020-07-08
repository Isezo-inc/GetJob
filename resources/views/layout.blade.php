<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title-block')</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  @yield('style')
  <link rel = "stylesheet" href="/css/enterTheSystem.css">
</head>
<body>
  @yield('head')
  <main role="main" class="mt-5">
    <div class="container-fluid" id="create_job">
      <h1 class="text-success" style="font-size:82px;">Black lives matter</h1>
        @yield('button_block1')
    </div>
    <div class="container-fluid" id="img">
      <div class="col-lg-ofsset-2">
        @yield('search')
      </div>
        <div class="container">
          <p>Вывод резюмешек</p>
        </div>
      </div>
    </main>
@extends('auth')
</body>
</html>
