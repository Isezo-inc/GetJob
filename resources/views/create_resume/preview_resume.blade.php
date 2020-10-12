<!--Фаил окна создания вакансии-->
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Предварительный просмотр</title>
  <link rel="stylesheet" type="text/css" href="/css/create_form.css">
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/f8e7a249bf.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="preview">
    <div class="page">
      <div class="resume-header head">
        <div class="fio" id="f-response">ФИО</div>
        <div class="fio" id="i-response"></div>
        <div class="fio" id="o-response"></div>
        <div class="string post" id="post-response"></div>
        <i class="fas fa-globe-europe"></i><div class="city" id="city-response"></div>
        <i class="fas fa-cog"></i><div class="age" id="age-response"></div>
      </div>

      <div class="flex" style="min-height:800px;">
        <div class="resume-body">
            <div class="block contacts-header">
              <h3 class="header">Контакты</h3>
              <div class="block contacts">
                <div class="row mb-1">
                  <div class="item col-6 col-sm-6 col-md-6 col-xl-5">
                    <i class="fas fa-phone-alt"></i>
                    <div class="tel" id="tel-response">+7 914 813-77-02</div>
                    <div class="messengers">
                      <i class="fa fa-whatsapp" aria-hidden="true" id="whatsapp-response"></i>
                      <i class="fab fa-viber" aria-hidden="true" id="viber-response"></i>
                      <i class="fab fa-telegram" aria-hidden="true" id="telegram-response"></i>
                    </div>
                  </div>
                  <div class="email col-6 col-sm-6 col-md-6 col-xl-5">
                    <i class="fas fa-envelope"></i>
                    <div class="item" id="email-response">qwerty@mail.ru</div>
                  </div>
                </div>
                <div id="social-response">
                  <div class="row mb-1" >
                    <div class="col-6 col-sm-6 col-md-6 col-xl-5">
                      <i class="fab fa-vk"></i>
                      <a href="https://vk.com/id214448862">https://vk.com/id214448862</a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-xl-5">
                      <i class="fab fa-vk"></i>
                      <a href="https://vk.com/id214448862">https://vk.com/id214448862</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block additional">
              <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-xl-5">
                  <b >Желаемая зарплата:</b><br>
                  <span id="salary-response">30000</span>
                  <span id="currency-response">₽</span>
                  <span id="salary_period-response">/Месяц</span>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-5">
                  <b >Занятость:</b>
                  <span id="employment-response"></span>
                  <span id="employment-response"></span>

                </div>
              </div>
            </div>
            <div class="block experiences">
              <h3 class="header">Опыт работы</h3>
              <div id="work-response">
                <div class="row">
                  <div class="name col-6 col-sm-6 col-md-6 col-xl-5">ООО этериал</div>
                  <div class="date col-6 col-sm-6 col-md-6 col-xl-5">01.2020 — н.в.</div>
                </div>
                <div class="">Директор:</div>
                <div class="pl-4 small"><p>кушать печеньки</p><p>123213 123 12 32123 123</p></div>
              </div>
            </div>
            <div class="block educations">
              <h3 class="header">Образование</h3>
              <div id="educ-response">
                <div class="row">
                  <div class="name col-6 col-sm-6 col-md-6 col-xl-5">Тогу,Бакалавр</div>
                  <div class="date col-6 col-sm-6 col-md-6 col-xl-5">2020</div>
                </div>
                <div class="">ФАИТ, ИС</div>
              </div>
            </div>
            <div class="block skills">
              <h3 class="header">Профессиональные навыки</h3>
              <div id="skills-response">
                <li style="">
                  <div class="name col-6 col-sm-6 col-md-6 col-xl-5">Езда на одном колесе</div>
                  <div class="col-6 col-sm-6 col-md-6 col-xl-5">средний</div>
                </li>
                <li style="">
                  <div class="name col-6 col-sm-6 col-md-6 col-xl-5">Езда на одном колесе</div>
                  <div class="col-6 col-sm-6 col-md-6 col-xl-5">средний</div>
                </li>

              </div>
            </div>
            <div class="block educations">
              <h3 class="header">Образование</h3>
              <div id="educ-response">
                <div class="row">
                  <div class="name col-6 col-sm-6 col-md-6 col-xl-5">Тогу,Бакалавр</div>
                  <div class="date col-6 col-sm-6 col-md-6 col-xl-5">2020</div>
                </div>
                <div class="">ФАИТ, ИС</div>
              </div>
            </div>
            <div class="block educations">
              <h3 class="header">Образование</h3>
              <div id="educ-response">
                <div class="row">
                  <div class="name col-6 col-sm-6 col-md-6 col-xl-5">Тогу,Бакалавр</div>
                  <div class="date col-6 col-sm-6 col-md-6 col-xl-5">2020</div>
                </div>
                <div class="">ФАИТ, ИС</div>
              </div>
            </div>
            <div class="block educations">
              <h3 class="header">Образование</h3>
              <div id="educ-response">
                <div class="row">
                  <div class="name col-6 col-sm-6 col-md-6 col-xl-5">Тогу,Бакалавр</div>
                  <div class="date col-6 col-sm-6 col-md-6 col-xl-5">2020</div>
                </div>
                <div class="">ФАИТ, ИС</div>
              </div>
            </div>
        </div>
      </div>




    </div>
  </div>
</body>
</html>
