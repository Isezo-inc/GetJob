<!--Фаил окна создания вакансии-->
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Размещение вакансии</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/view_resume.js" type="text/javascript"></script>
<!--  <script type="text/javascript" src="/js/create_resume.js"></script>
-===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/create_form.css">
  <script src="https://kit.fontawesome.com/f8e7a249bf.js" crossorigin="anonymous"></script>
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
      <div class="wrap-headder">
        <a href="/" class="masthead-brand" style="color:#bf2e1a">Get</a><a href="/employer" class="masthead-brand" style="color:#17a2b8;padding-left: 0;">Job</a>
      </div>
			<div class="wrap-login100" id="form-person">
				<form class="login100-form validate-form" action="" method="post">
          @csrf
            <div class="d-f">
              <div class="desc-form">
                <div class="wrap-input100 validate-input" style="width: 60%">
                  <input class="input100 save" type="text" id="nameResume" name="nameResume" required oninvalid="this.setCustomValidity('Название резюме нужно для сохранения')" oninput="setCustomValidity('')">
                  <span class="focus-input100" data-placeholder="Название резюме"></span>
                </div>
              </div>
              <div class="desc-form" style="margin-left:-9%">
                <input class="checkbox blue save" id="customCheckbox" type="checkbox" checked/>
                <label for="customCheckbox" class="checkbox-label">
                  <span class="on">Резюме по шаблону</span>
                  <span class="off">Произвольное резюме</span>
                </label>
              </div>
            </div>
            <div id ="customContent">
              <div class="mb-4 deck_border"><!--Основная информация-->
                <legend data-toggle="collapse" data-target="#blockDeck" class="leg">Основная информация</legend>
                <div class="collapse show" id="blockDeck">
                  <div class="d-f">
                    <div class="desc-form">
                      <div class="wrap-input100 validate-input">
                        <input class="input100 save" type="text" id="vacancy" name="vacancy" required oninvalid="this.setCustomValidity('Кем бы вы хотели работать?')" oninput="setCustomValidity('')">
                        <span class="focus-input100" data-placeholder="Желаемая должность"></span>
                      </div>
                      <div class="profile-photo">
                        <div class="profile-photo-container add">
                           <label for="resumeFileUpload" class="uploadLabel">
                            <span>Добавить фото</span>
                           </label>
                        </div>
                        <input id="resumeFileUpload" type="file">
                       </div>
                    </div>
                    <div class="desc-form">
                      <div class="wrap-input100 validate-input">
                        <input class="input100 save" type="text" id="family" name="family" required oninvalid="this.setCustomValidity('Укажите Фамилию')" oninput="setCustomValidity('')">
                        <span class="focus-input100" data-placeholder="Фамилия"></span>
                      </div>
                      <div class="wrap-input100 validate-input">
                        <input class="input100 save" type="text" id="fname" name="fname" required oninvalid="this.setCustomValidity('Укажите Имя')" oninput="setCustomValidity('')">
                        <span class="focus-input100" data-placeholder="Имя"></span>
                      </div>
                      <div class="wrap-input100 validate-input">
                        <input class="input100 save" type="text" id="sname" name="sname" required oninvalid="this.setCustomValidity('Укажите Отчество')" oninput="setCustomValidity('')">
                        <span class="focus-input100" data-placeholder="Отчество"></span>
                      </div>
                    </div>
                  </div>
                  <div class="d-f">
                    <div class="desc-form">
                      <div class="wrap-input100 validate-input">
                        <input class="input100 save" type="number" id="age" name="age" min="12" max="70">
                        <span class="focus-input100" data-placeholder="Полных лет"></span>
                      </div>
                    </div>
                    <div class="desc-form">
                      <div class="wrap-input100 validate-input">
                        <input class="input100 save" type="text" id="city" name="city" required oninvalid="this.setCustomValidity('В каком городе ищете работу?')" oninput="setCustomValidity('')">
                        <span class="focus-input100" data-placeholder="Город проживания"></span>
                      </div>
                    </div>
                  </div>
                  <div class="d-f">
                    <div class="desc-form">
                      <label for="salary">Заработная плата</label>
              				<div class="wrap-input100 validate-input" style="display:flex;margin-bottom: 0;">
                        <input class="input100 save" type="number" placeholder="30000" id="salary" name="salary" required oninvalid="this.setCustomValidity('Нужно указать размер зарплаты')" oninput="setCustomValidity('')">
                        <span class="focus-input100"></span>
                        <!--<input class="input100 save collapse" id="Salary12" type="number" placeholder="35000" step="1000" min="1000" name="max_salary">-->
                        <select class="js-example-placeholder-single input100 save" id="currency" name="currency">
                          <option value="₽" selected>РУБ</option>
                          <option value="$">USD</option>
                          <option value="€">EUR</option>
                        </select>
                        <select class="js-example-placeholder-single input100 save" id="job_salary_period" name="job_salary_period">
                          <option value="Час">В час</option>
                          <option value="День">В день</option>
                          <option value="Неделю">В неделю</option>
                          <option value="Месяц" selected>В месяц</option>
                          <option value="Год">В год</option>
                        </select>
              				</div>
                      <a class="btn btn-link disabled" data-toggle="collapse" data-target="#Salary12" style="margin-bottom: 37px;">Указать диапазон</a>
                    </div>
                  </div>
                  <div class="d-f">
                    <div class="desc-form">
                      <div class="wrap-input100 validate-input">
                        <label for="type_employ">Выберите тип трудоустройства</label>
                        <select class="js-example-placeholder-single input100 save" id="type_employ" name="type_employ">
                          <option value=""></option>
                          <option value="Полная занятность">Полная занятность</option>
                          <option value="Частичная занятность">Частичная занятность</option>
                          <option value="Проектная/временная работа">Проектная/временная работа</option>
                          <option value="Стажеровка">Стажеровка</option>
                        </select>
                        <span class="focus-input100"></span>
                      </div>
                    </div>
                    <div class="desc-form">
                      <div class="wrap-input100 validate-input">
                        <label for="schedule_work">Выберите график</label>
                        <select class="js-example-placeholder-single input100 save" id="schedule_work" name="schedule_work">
                          <option value=""></option>
                          <option value="Полный день">Полный день</option>
                          <option value="Гибкий график">Гибкий график</option>
                          <option value="Сменный график">Сменный график</option>
                          <option value="Удаленная работа">Удаленная работа</option>
                          <option value="Вахтовый метод">Вахтовый метод</option>
                        </select>
                        <span class="focus-input100"></span>
              				</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4 deck_border"><!--Контакты-->
                <legend data-toggle="collapse" data-target="#blockSocial" class="leg">Контакты</legend>
                <div class="collapse show" id="blockSocial">
                  <div class="d-f">
                    <div class="desc-form" style="margin-top:54px;">
                      <div class="wrap-input100 validate-input" data-validate = "Введите эл. почту">
                        <input class="input100 save" type="email" id="email" name="email">
                        <span class="focus-input100" data-placeholder="Электронная почта"></span>
                      </div>
                    </div>
                    <div class="desc-form">
                      <div class="d-inline-flex">
                        <label for="phone" style="margin-right: 15px;">Номер телефона</label>
                        <div class="social-select-wrapper icons">
                          <div class="custom-control custom-checkbox social-select social-select_whatsapp custom-control-inline">
                              <input type="checkbox" id="resumePhoneWhatsapp" data-id="whatsapp" name="socialSelect" class="custom-control-input save">
                              <label class="custom-control-label" for="resumePhoneWhatsapp"></label>
                          </div>

                          <div class="custom-control custom-checkbox social-select social-select_viber custom-control-inline">
                              <input type="checkbox" id="resumePhoneViber" data-id="viber" name="socialSelect" class="custom-control-input save">
                              <label class="custom-control-label" for="resumePhoneViber"></label>
                          </div>

                          <div class="custom-control custom-checkbox social-select social-select_telegram custom-control-inline">
                              <input type="checkbox" id="resumePhoneTelegram" data-id="telegram" name="socialSelect" class="custom-control-input save">
                              <label class="custom-control-label" for="resumePhoneTelegram"></label>
                          </div>
                        </div>
                      </div>
                      <div class="wrap-input100 validate-input" id="phone">
                        <input class="input100 save" id="online_phone" name="phone" type="tel" maxlength="50"
                     autofocus="autofocus" value="<?=(isset($_POST['phone'])?$_POST['phone']:'+7(9__)___-__-__')?>"
                     pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                     placeholder="+7(9__)___-__-__">
                        <span class="focus-input100"></span>
                      </div>
                    </div>
                  </div>
                  <div id="social"></div>
                  <div class="btn btn-block btn-link addBlock" onclick="addInputSocial()">
                    + Добавить социальную сеть
                  </div>
                </div>
              </div>
              <div class="mb-4 deck_border"><!--Опыт работы-->
                <legend data-toggle="collapse" data-target="#blockWork" class="leg">Опыт работы</legend>
                <div class="collapse show" id="blockWork">
                  <div id="input_exp"></div>
                  <div class="btn btn-block btn-link addBlock" onclick="addInputExp()">
                    + Добавить место работы
                  </div>
                </div>
              </div>
              <div class="mb-4 deck_border"><!--Образование-->
                <legend data-toggle="collapse" data-target="#blockEduc" class="leg">Образование</legend>
                <div class="collapse show" id="blockEduc">
                  <div id="input_education"></div>
                  <div class="btn btn-block btn-link addBlock" onclick="addInputEduc()">
                    + Добавить образование
                  </div>
                </div>
              </div>
              <div class="mb-4 deck_border"><!--Профессиональные навыки-->
                <legend data-toggle="collapse" data-target="#blockSkills" class="leg">Профессиональные навыки</legend>
                <div class="collapse show" id="blockSkills">
                  <div id="input_skills"></div>
                  <div class="d-f">
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6 btn btn-block btn-link addBlock" onclick="addInputSkills()">
                      + Добавить профессиональный навык
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-xl-6 btn btn-block btn-link addBlock" onclick="">
                      + Подобрать профессиональный навык
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4 deck_border"><!--Портфолио-->
                <legend data-toggle="collapse" data-target="#blockPortfolio" class="leg">Портфолио</legend>
                <div class="collapse show" id="blockPortfolio">
                  <div id="input_portfolio"></div>
                  <div class="btn btn-block btn-link addBlock" onclick="addInputPortfolio()">
                    + Добавить
                  </div>
                </div>
              </div>
              <div class="mb-4 deck_border"><!--Курсы повышения квалификации-->
                <legend data-toggle="collapse" data-target="#blockTraining" class="leg">Курсы повышения квалификации</legend>
                <div class="collapse show" id="blockTraining">
                  <div id="input_training"></div>
                  <div class="btn btn-block btn-link addBlock" onclick="addInputTrain()">
                    + Добавить курс
                  </div>
                </div>
              </div>
              <div class="mb-4 deck_border"><!--О себе-->
                <legend data-toggle="collapse" data-target="#blockMe" class="leg">О себе</legend>
                <div class="collapse show" id="blockMe">
                  <div class="d-f">
                    <div class="desc-form">
                      <div class="wrap-input100 validate-input">
                        <input class="input100 save" type="text" name="me" value="" multiple>
                        <span class="focus-input100" data-placeholder="Если мы что-то упустили, можете дополнить здесь:"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      				<!--<div class="container-login100-form-btn">Кнопка далее
      					<div class="wrap-login100-form-btn">
      						<div class="login100-form-bgbtn"></div>
      						<button class="login100-form-btn">
      							Далее
      						</button>
      					</div>
      				</div>-->
            </div>
            <div id="freeContent" style="display: none;"><!--Произвольное резюме-->
              <div class="mb-4 deck_border">
                <legend class="res">Загрузить резюме</legend>
                <input type="file" id="pdf" name="pdf" value="" accept="application/pdf">
              </div>
            </div>
				</form>
			</div>
      <div class="mb-5 ml-4 wrap-login100" id = "preview"><!--Фреймы предварительного просмотра-->
        <div class="deck_border h-100">
          <legend class="res">Предварительный просмотр</legend>
          <iframe id="previewCustom" src="create_resume/preview" scrolling="yes">Ваш браузер не поддерживает предварительный просмотр</iframe>
          <iframe id="previewFree" scrolling="yes">Ваш браузер не поддерживает предварительный просмотр</iframe>
        </div>
      </div>
      <div class="unhide">
         <div class="toggle-button vesi">
             <input id="toggleButton" type="checkbox">
             <label for="toggleButton" data-on-text="Скрыть" data-off-text="Отобразить"></label>
         </div>
      </div>
		</div>
	</div>

  <!-- хз для чего
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="js/create_form.js"></script>
<script type="text/javascript">
  var qwe = document.getElementById("pdf");
  var queue = [];
  qwe.addEventListener('change', function() {
    [].forEach.call(this.files, function(file) {
        var reader = new FileReader();
        reader.onload = function(event) {
          var iframe = document.getElementById('previewFree');
          iframe.src = event.target.result;
          //document.getElementById("response").appendChild(iframe);
          //queue.push({file: file, element: iframe});
        };

        reader.readAsDataURL(file);
    });
  }, false);
</script>

<script type="text/javascript">
  var toggleButton = document.getElementById("toggleButton");
  toggleButton.onclick = function() {
    if(this.checked){
      $( "#form-person" ).hide( "fast", function() {
      });
      $( "#preview" ).show( "fast", function() {
      });
    }else {
      $( "#form-person" ).show( "fast", function() {
      });
      $( "#preview" ).hide( "fast", function() {
      });
    }
  }

  var customCheckbox = document.getElementById("customCheckbox");
  customCheckbox.onclick = function() {
    if(this.checked){
      $( "#customContent" ).show( "fast", function() {
      });
      $( "#previewCustom" ).show( "fast", function() {
      });
      $( "#freeContent" ).hide( "fast", function() {
      });
      $( "#previewFree" ).hide( "fast", function() {
      });
    }else {
      $( "#customContent" ).hide( "fast", function() {
      });
      $( "#previewFree" ).show( "fast", function() {
      });
      $( "#freeContent" ).show( "fast", function() {
      });
      $( "#previewCustom" ).hide( "fast", function() {
      });
    }
  }
  if(sessionStorage.getItem('customCheckbox')) {
    var radioStatus = sessionStorage.getItem('customCheckbox');
    if(radioStatus == "true"){
      $( "#customContent" ).show( "fast", function() {
      });
      $( "#previewCustom" ).show( "fast", function() {
      });
      $( "#freeContent" ).hide( "fast", function() {
      });
      $( "#previewFree" ).hide( "fast", function() {
      });
    }else {
      $( "#customContent" ).hide( "fast", function() {
      });
      $( "#previewFree" ).show( "fast", function() {
      });
      $( "#freeContent" ).show( "fast", function() {
      });
      $( "#previewCustom" ).hide( "fast", function() {
      });
    }
  }

var xSocial = 0;
var xExp = 0;
var xEduc = 0;
var xSkills = 0;
var xPortfolio = 0;
var xTrain = 0;
var arrId = [[],[],[],[],[],[]];
if(sessionStorage.getItem("arrId")){
  arrId = JSON.parse(sessionStorage.getItem("arrId"));
  if(arrId[0].length > 0){
    xSocial = arrId[0][arrId[0].length - 1] + 1;
  }
  if(arrId[1].length > 0){
    xExp = arrId[1][arrId[1].length - 1] + 1;
  }
  if(arrId[2].length > 0){
    xEduc = arrId[2][arrId[2].length - 1] + 1;
  }
  if(arrId[3].length > 0){
    xSkills = arrId[3][arrId[3].length - 1] + 1;
  }

  for(var i = 0; i < arrId.length; i++){
    for(var j = 0; j < arrId[i].length; j++){
      if(arrId[i].length > 0){
        switch (i) {
          case 0:
            addInputSocial(arrId[i][j]);
            break;
          case 1:
            addInputExp(arrId[i][j]);
            break;
          case 2:
            addInputEduc(arrId[i][j]);
            break;
          case 3:
            addInputSkills(arrId[i][j]);
            break;
          case 4:
            addInputPortfolio(arrId[i][j]);
            break;
          case 5:
            addInputTrain(arrId[i][j]);
            break;

          default:
        }
      }
    }
  }
}

$(document).ready(function() {
  $(".js-example-placeholder-single").select2({
    placeholder: "",
    minimumResultsForSearch: Infinity
  });
  var selectElements = document.querySelectorAll('select');
  for (i=0; i<selectElements.length; i++) {
   (function(selectElements) {
     selectElements.classList.remove("js-example-placeholder-single");
     selectElements.classList.add("selectOld");
     selectElements.classList.add("input100");
     selectElements.classList.add("save");
   })(selectElements[i]);
  }
  /*$(".js-example-placeholder-single").className = "selectOld input100 save";
  document.getElementById("job_salary_period").className = "selectOld input100 save";
  document.getElementById("currency").className = "selectOld input100 save";
  document.getElementById("type_employ").className = "selectOld input100 save";
  document.getElementById("schedule_work").className = "selectOld input100 save";*/
});

$("body").on("input", ".save", function () {
  var id = $(this).attr('id')
    switch (id) {
      case "family":
        document.getElementById("previewCustom").contentWindow.document.getElementById("f-response").innerHTML = $(this).val();
        break;
      case "fname":
        document.getElementById("previewCustom").contentWindow.document.getElementById("i-response").innerHTML = $(this).val();
        break;
      case "sname":
        document.getElementById("previewCustom").contentWindow.document.getElementById("o-response").innerHTML = $(this).val();
        break;
      case "vacancy":
        document.getElementById("previewCustom").contentWindow.document.getElementById("post-response").innerHTML = $(this).val();
        break;
      case "city":
        document.getElementById("previewCustom").contentWindow.document.getElementById("city-response").innerHTML = $(this).val();
        break;
      case "age":
        document.getElementById("previewCustom").contentWindow.document.getElementById("age-response").innerHTML = "Возраст:"+$(this).val();
        break;
      case "salary":
        document.getElementById("previewCustom").contentWindow.document.getElementById("salary-response").innerHTML = $(this).val();
        break;
      case "currency":
        document.getElementById("previewCustom").contentWindow.document.getElementById("currency-response").innerHTML = $(this).val();
        break;
      case "job_salary_period":
        document.getElementById("previewCustom").contentWindow.document.getElementById("salary_period-response").innerHTML = "/"+$(this).val();
        break;
      case "":
        document.getElementById("previewCustom").contentWindow.document.getElementById("currency-response").innerHTML = $(this).val();
        break;
      case "":
        document.getElementById("previewCustom").contentWindow.document.getElementById("currency-response").innerHTML = $(this).val();
        break;
      case "":
        document.getElementById("previewCustom").contentWindow.document.getElementById("currency-response").innerHTML = $(this).val();
        break;
      case "":
        document.getElementById("previewCustom").contentWindow.document.getElementById("currency-response").innerHTML = $(this).val();
        break;
      default:

    }
});



function addInputSocial(j) {
  if(j!= null){
    xSocial = j;
  }
  var strSocial = '<div class="d-flex mb-4 icon-social" id="input_social' + xSocial + '">'+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input">'+
        '<label for="social' + xSocial + '">Выберите социальную сеть</label>'+
        '<select class="js-example-placeholder-single input100 save" id="newSocial' + xSocial + '" name="social' + xSocial + '">'+
          '<option value="vk">Вконтакте</option>  '+
          '<option value="ig">Instagram</option> '+
          '<option value="gh">GitHub</option>'+
          '<option value="fb">Facebook</option>  '+
          '<option value="ok">Одноклассники</option> '+
          '<option value="li">LinkedIn</option>  '+
          '<option value="sk">Skype</option>  '+
          '<option value="tw">Twitter</option> '+
        '</select> '+
        '<span class="focus-input100"></span>'+
      '</div>'+
    '</div> '+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input" style="margin-top: 16px;">  '+
        '<input class="input100 save" type="text" id="link' + xSocial + '" name="link' + xSocial + '">'+
        '<span class="focus-input100" data-placeholder="Ссылка на профиль"></span>'+
      '</div>'+
    '</div>'+
    '<i class="fas fa-minus" onclick=remoteInput("input_social' + xSocial + '") style="color: red; cursor:pointer;"></i>'+
  '</div>';
  document.getElementById('social').insertAdjacentHTML('beforeend',strSocial);
  var newSocial = "newSocial" + xSocial;
  if(j==null){
    $(".js-example-placeholder-single").select2({
      templateResult: ImgSocial,
      placeholder: "",
      minimumResultsForSearch: Infinity
    });
    document.getElementById(newSocial).className = "selectOld save input100";
    arrId[0].push(xSocial);
    sessionStorage.setItem("arrId",JSON.stringify(arrId));
  }
  document.getElementById(newSocial).id = "selectOld" + xSocial;
  xSocial++;
}
function ImgSocial (social) {
  if (!social.id) {
    return social.text;
  }
  var baseUrl = "/images";
  var $social = $(
    '<span><img src="' + baseUrl + '/' + social.element.value.toLowerCase() + '.png" class="img-social" /> ' + social.text + '</span>'
  );
  return $social;
};

function addInputExp(j) {
  if(j!=null){
    xExp = j;
  }
  var strWork = '<div class="mb-4 icon-social" id="input_exp' + xExp + '">'+
    '<div class="d-f">'+
      '<div class="desc-form">'+
        '<div class="wrap-input100 validate-input">'+
          '<input class="input100 save" type="text" id="companyName' + xExp + '" name="companyName' + xExp + '" required>'+
          '<span class="focus-input100" data-placeholder="Название компании"></span>'+
        '</div>'+
      '</div>'+
      '<div class="desc-form">'+
        '<div class="wrap-input100 validate-input">'+
          '<input class="input100 save" type="text" id="post' + xExp + '" name="post' + xExp + '" required >'+
          '<span class="focus-input100" data-placeholder="Должность"></span>'+
        '</div>'+
      '</div>'+
      '<i class="fas fa-minus" onclick=remoteInput("input_exp' + xExp + '") style="margin: 0 0 0 auto; color: red; cursor:pointer;"></i>'+
    '</div>'+
    '<div class="d-f">'+
      '<div class="desc-form col-5 col-sm-5 col-md-5 col-xl-5">'+
        '<div class="wrap-input100 validate-input">'+
          '<label for="begin0">Начало работы</label>'+
          '<select class="js-example-placeholder-single input100 save" id="newbegin' + xExp + '" name="begin' + xExp + '">'+
            '<option value=""></option>'+
            '<option value="Jan">Январь</option>'+
            '<option value="Feb">Февраль</option>'+
            '<option value="Mar">Март</option>'+
            '<option value="Apr">Апрель</option>'+
            '<option value="May">Май</option>'+
            '<option value="Jun">Июнь</option>'+
            '<option value="Jul">Июль</option>'+
            '<option value="Aug">Август</option>'+
            '<option value="Sep">Сентябрь</option>'+
            '<option value="Oct">Октябрь</option>'+
            '<option value="Nov">Ноябрь</option>'+
            '<option value="Dec">Декабрь</option>'+
          '</select>'+
          '<span class="focus-input100"></span>'+
        '</div>'+
      '</div>'+
      '<div class="desc-form col-3 col-sm-3 col-md-3 col-xl-3">'+
        '<div class="wrap-input100 validate-input" style="margin-top: 16px;">'+
          '<input class="input100 save" type="number" min="1920" max ="2020" step="1" id="new_year' + xExp + '" name="new_year' + xExp + '">'+
          '<span class="focus-input100" data-placeholder="Год"></span>'+
        '</div>'+
      '</div>'+
    '</div>'+
    '<div class="d-f">'+
      '<div class="desc-form col-5 col-sm-5 col-md-5 col-xl-5">'+
        '<div class="wrap-input100 validate-input">'+
          '<label for="begin' + xExp + '">Окончание работы</label>'+
          '<select class="js-example-placeholder-single input100 save" id="newend' + xExp + '" name="end' + xExp + '">'+
            '<option value=""></option>'+
            '<option value="Jan">Январь</option>'+
            '<option value="Feb">Февраль</option>'+
            '<option value="Mar">Март</option>'+
            '<option value="Apr">Апрель</option>'+
            '<option value="May">Май</option>'+
            '<option value="Jun">Июнь</option>'+
            '<option value="Jul">Июль</option>'+
            '<option value="Aug">Август</option>'+
            '<option value="Sep">Сентябрь</option>'+
            '<option value="Oct">Октябрь</option>'+
            '<option value="Nov">Ноябрь</option>'+
            '<option value="Dec">Декабрь</option>'+
          '</select>'+
          '<span class="focus-input100"></span>'+
        '</div>'+
      '</div>'+
      '<div class="desc-form col-3 col-sm-3 col-md-3 col-xl-3">'+
        '<div class="wrap-input100 validate-input" style="margin-top: 16px;">'+
          '<input class="input100 save" type="number" min="1920" max ="2020" step="1" name="end_year' + xExp + '" id="end_year' + xExp + '">'+
          '<span class="focus-input100" data-placeholder="Год"></span>'+
        '</div>'+
      '</div>'+
      '<div class="desc-form col-2 col-sm-2 col-md-2 col-xl-2 checkbox">'+
        '<input class="save" type="checkbox" name="nowtime' + xExp + '" id="nowtime' + xExp + '" onclick="clickCheck(' + xExp + ')">'+
        '<label for="nowtime' + xExp + '" ></label>'+
      '</div>'+
    '</div>'+
  '</div>';
  document.getElementById('input_exp').insertAdjacentHTML('beforeend',strWork);
  var new_begin_exp = "newbegin" + xExp ;
  var new_end_exp = "newend" + xExp;
  if(j==null){
    $(".js-example-placeholder-single").select2({
      placeholder: "",
      minimumResultsForSearch: Infinity
    });
    document.getElementById(new_begin_exp).className = "selectOld save input100";
    arrId[1].push(xExp);
    sessionStorage.setItem("arrId",JSON.stringify(arrId));
  }
  document.getElementById(new_begin_exp).id = "begin_expOld" + xExp;
  document.getElementById(new_end_exp).classList.add("selectOld" + xExp);
  document.getElementById(new_end_exp).id = "end_expOld" + xExp;
  xExp++;
}

function addInputEduc(j) {
  if(j!=null){
    xEduc = j;
  }
  var strEduc = '<div class="mb-4 icon-social" id="input_educ' + (xEduc) + '"><div class="d-f">'+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input">'+
        '<label for="level">Уровень</label>'+
        '<select class="js-example-placeholder-single input100 save" id="level' + (xEduc) + '" name="level' + (xEduc) + '">'+
          '<option value=""></option>'+
          '<option value="Среднее">Среднее</option>'+
          '<option value="Среднее специальное">Среднее специальное</option>'+
          '<option value="Неполное высшее">Неполное высшее</option>'+
          '<option value="Высшее">Высшее</option>'+
          '<option value="Бакалавр">Бакалавр</option>'+
          '<option value="Магистр">Магистр</option>'+
          '<option value="Кандидат наук">Кандидат наук</option>'+
          '<option value="Доктор наук">Доктор наук</option>'+
        '</select>'+
        '<span class="focus-input100"></span>'+
      '</div>'+
    '</div>'+
    '<div class="desc-form" style="margin-top: 37px;">'+
      '<div class="wrap-input100 validate-input" data-validate = "Введите название учебного заведения">'+
        '<input class="input100 save" type="text" id="education' + (xEduc) + '" name="education' + (xEduc) + '">'+
        '<span class="focus-input100" data-placeholder="Учебное заведение"></span>'+
      '</div>'+
    '</div><i class="fas fa-minus" onclick=remoteInput("input_educ' + (xEduc) + '") style="margin: 0 0 0 auto; color: red; cursor:pointer;"></i>'+
  '</div>'+
  '<div class="d-f">'+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input" data-validate = "Введите название факультета">'+
        '<input class="input100 save" type="text" id="faculty' + (xEduc) + '" name="faculty' + (xEduc) + '">'+
        '<span class="focus-input100" data-placeholder="Факультет"></span>'+
      '</div>'+
    '</div>'+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input" data-validate = "Введите специальность">'+
        '<input class="input100 save" type="text" id="specialty' + (xEduc) + '" name="specialty' + (xEduc) + '">'+
        '<span class="focus-input100" data-placeholder="Специальность"></span>'+
      '</div>'+
    '</div>'+
  '</div>'+
  '<div class="d-f">'+
    '<div class="desc-form" style="width: 20%;">'+
      '<div class="wrap-input100 validate-input" data-validate = "Введите год окончания">'+
        '<input class="input100 save" type="number" min="1960" max="2030" id="yearOfGraduation' + (xEduc) + '" name="yearOfGraduation' + (xEduc) + '" >'+
        '<span class="focus-input100" data-placeholder="Год окончания"></span>'+
    '</div>'+
  '</div>'+
  '<i class="fas fa-question-circle" style="color:#999999;position: relative;top: 43px;" title="Если вы учитесь в настоящее время, укажите год предполагаемого окончания"></i>'+
  '</div></div>';
  document.getElementById('input_education').insertAdjacentHTML('beforeend',strEduc);
  var new_level = "level" + xEduc ;
  if(j==null){
    $(".js-example-placeholder-single").select2({
      placeholder: "",
      minimumResultsForSearch: Infinity
    });
    document.getElementById(new_level).className = "selectOld save input100";
    arrId[2].push(xEduc);
    sessionStorage.setItem("arrId",JSON.stringify(arrId));
  }
  document.getElementById(new_level).id = "selectOld" + xEduc;
  xEduc++;
}
function clickCheck(num){
  var end_year = "end_year" + num;
  var bane_select = ".selectOld" + num;
  var nowtime = "nowtime" + num;
  if(document.getElementById(nowtime).checked){
    $(bane_select).prop("disabled", true);
    document.getElementById(end_year).setAttribute("disabled", "disabled");
  }else{
    $(bane_select).prop("disabled", false);
    document.getElementById(end_year).removeAttribute("disabled");
  }
}

function addInputSkills(j) {
  if(j!=null){
    xSkills = j;
  }
  var strSkills = '<div class="d-flex mb-4 icon-social" id="input_skills' + xSkills + '">'+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input" style="margin-top: 16px;">  '+
        '<input class="input100 save" type="text" id="link' + xSkills + '" name="link' + xSkills + '">'+
        '<span class="focus-input100" data-placeholder="Описание навыка"></span>'+
      '</div>'+
    '</div>'+
    '<div class="desc-form">'+
      '<label for="rdo" id="wordshift">Уровень:</label>'+
      '<div class="cntr" id="rdo' + xSkills + '">'+
        '<label for="rdo-' + xSkills + '-1" class="btn-radio" onmouseover=editLvl("Начальный") onmouseout=editLvl("") onclick=selectLvl(' + xSkills + ',1)>'+
          '<input class="save" type="checkbox" id="rdo-' + xSkills + '-1" name="radio-lvl[' + xSkills + '][]">'+
          '<svg width="20px" height="20px" viewBox="0 0 20 20">'+
            '<circle cx="10" cy="10" r="9"></circle>'+
            '<path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>'+
            '<path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>'+
          '</svg>'+
        '</label>'+
        '<label for="rdo-' + xSkills + '-2" class="btn-radio" onmouseover=editLvl("Базовый") onmouseout=editLvl("") onclick=selectLvl(' + xSkills + ',2)>'+
          '<input  class="save" type="checkbox" id="rdo-' + xSkills + '-2" name="radio-lvl[' + xSkills + '][]">'+
          '<svg width="20px" height="20px" viewBox="0 0 20 20">'+
            '<circle cx="10" cy="10" r="9"></circle>'+
            '<path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>'+
            '<path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>'+
          '</svg>'+
        '</label>'+
        '<label for="rdo-' + xSkills + '-3" class="btn-radio" onmouseover= editLvl("Средний") onmouseout=editLvl("") onclick=selectLvl(' + xSkills + ',3)>'+
          '<input class="save" type="checkbox" id="rdo-' + xSkills + '-3" name="radio-lvl[' + xSkills + '][]">'+
          '<svg width="20px" height="20px" viewBox="0 0 20 20">'+
            '<circle cx="10" cy="10" r="9"></circle>'+
            '<path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>'+
            '<path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>'+
          '</svg>'+
        '</label>'+
        '<label for="rdo-' + xSkills + '-4" class="btn-radio" onmouseover=editLvl("Опытный") onmouseout=editLvl("") onclick=selectLvl(' + xSkills + ',4)>'+
          '<input class="save" type="checkbox" id="rdo-' + xSkills + '-4" name="radio-lvl[' + xSkills + '][]">'+
          '<svg width="20px" height="20px" viewBox="0 0 20 20">'+
            '<circle cx="10" cy="10" r="9"></circle>'+
            '<path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>'+
            '<path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>'+
          '</svg>'+
        '</label>'+
        '<label for="rdo-' + xSkills + '-5" class="btn-radio" onmouseover=editLvl("Профессиональный") onmouseout=editLvl("") onclick=selectLvl(' + xSkills + ',5)>'+
          '<input class="save" type="checkbox" id="rdo-' + xSkills + '-5" name="radio-lvl[' + xSkills + '][]">'+
          '<svg width="20px" height="20px" viewBox="0 0 20 20">'+
            '<circle cx="10" cy="10" r="9"></circle>'+
            '<path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>'+
            '<path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>'+
          '</svg>'+
        '</label>'+
      '</div>'+
    '</div> '+
    '<i class="fas fa-minus" onclick=remoteInput("input_skills' + xSkills + '") style="color: red; cursor:pointer;"></i>'+
  '</div>';
  document.getElementById('input_skills').insertAdjacentHTML('beforeend',strSkills);
  if(j==null){
    arrId[3].push(xSkills);
    sessionStorage.setItem("arrId",JSON.stringify(arrId));
  }
  xSkills++;
}
function editLvl(lvl){
  var newText = "Уровень:"+lvl;
  $("#wordshift").text(newText);
}
function selectLvl(xSkills,lvl){
  var byName = "radio-lvl[" + xSkills + "][]";
  var checkbox = document.getElementsByName(byName);
  for (var i=0; i<lvl; i++) { //проходим по чекбоксам
    checkbox[i].checked = true; //включаем их
  }
  for (var i=lvl; i<checkbox.length; i++) { //проходим по остальным чекбоксам
    checkbox[i].checked = false; //выключаем их
  }
}

function addInputPortfolio(j){
  if(j!=null){
    xPortfolio = j;
  }
  var strPortfolio = '<div class="d-flex mb-4 icon-social" id="input_portfolio' + xPortfolio + '">'+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input">'+
        '<input class="input100 save" type="text" id="Pname' + xPortfolio + '" name="Pname' + xPortfolio + '">'+
        '<span class="focus-input100" data-placeholder="Название достижения"></span>'+
      '</div>'+
    '</div> '+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input">'+
        '<input class="input100 save" type="text" id="Plink' + xPortfolio + '" name="Plink' + xPortfolio + '">'+
        '<span class="focus-input100" data-placeholder="Ссылка на ресурс"></span>'+
      '</div>'+
    '</div>'+
    '<i class="fas fa-minus" onclick=remoteInput("input_portfolio' + xPortfolio + '") style="color: red; cursor:pointer;"></i>'+
  '</div>';
  document.getElementById('input_portfolio').insertAdjacentHTML('beforeend',strPortfolio);
  if(j==null){
    arrId[4].push(xPortfolio);
    sessionStorage.setItem("arrId",JSON.stringify(arrId));
  }
  xPortfolio++;
}

function addInputTrain(j){
  if(j!=null){
    xTrain = j;
  }
  var strTrain = '<div class="d-flex mb-4 icon-social" id="input_train' + xTrain + '">'+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input">'+
        '<input class="input100 save" type="text" id="Tname' + xTrain + '" name="Tname' + xTrain + '">'+
        '<span class="focus-input100" data-placeholder="Название курса"></span>'+
      '</div>'+
    '</div> '+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input">'+
        '<input class="input100 save" type="text" id="Tcompany' + xTrain + '" name="Tcompany' + xTrain + '">'+
        '<span class="focus-input100" data-placeholder="Организация"></span>'+
      '</div>'+
    '</div>'+
    '<div class="desc-form">'+
      '<div class="wrap-input100 validate-input">'+
        '<input class="input100 save" type="number" id="Pend_year' + xTrain + '" name="Pend_year' + xTrain + '">'+
        '<span class="focus-input100" data-placeholder="Год окончания"></span>'+
      '</div>'+
    '</div> '+
    '<i class="fas fa-minus" onclick=remoteInput("input_train' + xTrain + '") style="color: red; cursor:pointer;"></i>'+
  '</div>';
  document.getElementById('input_training').insertAdjacentHTML('beforeend',strTrain);
  if(j==null){
    arrId[5].push(xTrain);
    sessionStorage.setItem("arrId",JSON.stringify(arrId));
  }
  xTrain++;
}

function remoteInput(remInput){
  document.getElementById(remInput).remove();
  //var idDiv = parseInt(remInput.match(/\d+/));
  var inputName = remInput.match(/\D+/);
  switch (inputName[0]) {
    case "input_social":
      var indexElem=arrId[0].indexOf(parseInt(remInput.match(/\d+/)));
      if (indexElem > -1)
        arrId[0].splice(indexElem,1);
      break;
    case "input_exp":
      var indexElem=arrId[1].indexOf(parseInt(remInput.match(/\d+/)));
      if (indexElem > -1)
        arrId[1].splice(indexElem,1);
      break;
    case "input_educ":
      var indexElem=arrId[2].indexOf(parseInt(remInput.match(/\d+/)));
      if (indexElem > -1)
        arrId[2].splice(indexElem,1);
      break;
    case "input_skills":
      var indexElem=arrId[3].indexOf(parseInt(remInput.match(/\d+/)));
      if (indexElem > -1)
        arrId[3].splice(indexElem,1);
      break;
    case "input_portfolio":
      var indexElem=arrId[4].indexOf(parseInt(remInput.match(/\d+/)));
      if (indexElem > -1)
        arrId[4].splice(indexElem,1);
      break;
    case "input_train":
      var indexElem=arrId[5].indexOf(parseInt(remInput.match(/\d+/)));
      if (indexElem > -1)
        arrId[5].splice(indexElem,1);
      break;
    default:
      break;
  }
  sessionStorage.setItem("arrId",JSON.stringify(arrId));
}

function setCursorPosition(pos, e) {
  e.focus();
  if (e.setSelectionRange) e.setSelectionRange(pos, pos);
    else if (e.createTextRange) {
      var range = e.createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select()
    }
}

function mask(e) {
  //console.log('mask',e);
  var matrix = this.placeholder,// .defaultValue
    i = 0,
    def = matrix.replace(/\D/g, ""),
    val = this.value.replace(/\D/g, "");
  def.length >= val.length && (val = def);
  matrix = matrix.replace(/[_\d]/g, function(a) {
    return val.charAt(i++) || "_"
  });
  this.value = matrix;
  if(val.length<12){
    i = matrix.lastIndexOf(val.substr(-1));
    i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
    setCursorPosition(i, this)
  }
}
window.addEventListener("DOMContentLoaded", function() {
  var input = document.querySelector("#online_phone");
  input.addEventListener("input", mask, false);
  input.focus();
  setCursorPosition(4, input);
});
</script>
<script src="js/autocomplete.js" type="text/javascript"></script>
</body>
</html>
