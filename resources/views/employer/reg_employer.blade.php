<title>Регистрация работодател</title>
</head>
<body style="background-attachment: fixed; background-image: linear-gradient(to left top, #17a2b8, #4ab8b1, #80cba7, #b7dba2, #eee8a9);">
  <div class="container-fluid" style="padding-top:5%;">
    <div class="container">
      <h2 style="padding-bottom:4%;"> Регистрация</h2>
      <form action = "save.blade.php" method="post">
        <div class="input-group">
          <h4>Блок 1</h4>
          <div class="input-group">
            <input type="text" placeholder="Электронная почта" data-qa="employer-registration-email" name="email" value="" class="form-control">
          </div>
          <div class="input-group">
            <input type="text" placeholder="Пароль" data-qa="employer-registration-email" name="password" value="" class="form-control">
          </div>
        </div>
        <div class="input-group">
          <h4>Блок 2</h4>
        <div class="input-group">
          <input type = "text" placeholder = "Имя" name = "name" class="form-control">
        </div>
        <div class="input-group">
          <input type = "text" placeholder = "Фамилия"  name="family" class="form-control">
        </div>
        <div class="input-group">
          <input type="tel" placeholder="Телефон" data-qa="employer-registration-phone-phoneFull" name="phoneFull" class="form-control">
        </div>
      </div>
      <div class="input-group">
        <h4>Блок 3</h4>
        <div class="input-group">
          <input type="text" placeholder="Название компании" data-qa="employer-registration-company-name" name="companyName" value="" class="form-control">
        </div>
        <div class="input-group">
          <input type="text" data-qa="auth-employer__city-input" data-gaformstatistic-name="areaId" placeholder="Город" autocomplete="off" value="" class="form-control">
        </div>
        <div class="input-group">
          <input type="submit" value="Зарегистрироваться" class="btn btn-info btn-lg">
        </div>
      </div>
      </form>
      <p>Условие регистрации</p>
    </div>
  </div>
