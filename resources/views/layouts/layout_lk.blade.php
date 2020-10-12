<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Личный кабинет</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <!--<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>-->
  <link rel = "stylesheet" href="css/app.css">
  <link rel = "stylesheet" href="css/enterTheSystem.css">
  <link rel = "stylesheet" href="css/lk.css">
    <!--@yield('style')-->
</head>
<body>
  @yield('head')
  <main role="main" class="mt-2">
    <div class="lk">
      <div class="side-menu">
        <ul class="nav nav-pills nav-stacked">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pdata">Личные данные</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#security">Безопасность</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#okno3">Еще какая-нибудь хуйня</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#okno4">И т.д</a></li>
        </ul>
      </div>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="pdata">123</div>
        <div class="tab-pane fade" id="security">...</div>
        <div class="tab-pane fade" id="okno3">...</div>
        <div class="tab-pane fade" id="okno4">...</div>
      </div>
    </div>
  </main>
</body>
</html>
