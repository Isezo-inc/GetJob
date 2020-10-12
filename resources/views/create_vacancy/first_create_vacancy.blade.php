<!--Фаил окна создания вакансии-->
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Размещение вакансии</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/create_form.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
      <div class="wrap-headder">
        <a href="/" class="masthead-brand" style="color:#bf2e1a">Get</a><a href="/employer" class="masthead-brand" style="color:#17a2b8;padding-left: 0;">Job</a>
      </div>
			<div class="wrap-login100">
        <div class="progress" style="width: 25%;	border-top: 10px solid red"></div>
				<form class="login100-form validate-form" action="{{route('sstep_cv')}}" method="post">
          @csrf
					<span class="login100-form-title pb-5">
						Разместить вакансию
					</span>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="name" required oninvalid="this.setCustomValidity('Вы не хотели бы представиться?')" oninput="setCustomValidity('')">
            <span class="focus-input100" data-placeholder="Ваше имя"></span>
          </div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="company" required oninvalid="this.setCustomValidity('Какая же компания без названия?')" oninput="setCustomValidity('')">
						<span class="focus-input100" data-placeholder="Название компании"></span>
					</div>

          <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="vacancy" required oninvalid="this.setCustomValidity('Укажите должность')" oninput="setCustomValidity('')">
						<span class="focus-input100" data-placeholder="Требуемая должность"></span>
					</div>

					<div class="wrap-input100 validate-input">
            <select class="js-example-basic-single input100" id="city" name="city" required oninvalid="this.setCustomValidity('Вы забыли выбрать город')" oninput="setCustomValidity('')">
              <option value=""></option>
              <option value="Биробиджан">Биробиджан</option>
              <option value="Казань">Казань</option>
              <option value="Москва">Москва</option>
              <option value="Хабаровск">Хабаровск</option>
            </select>
						<span class="focus-input100"></span>
					</div>

          <label for="phone">Номер телефона</label>
          <div class="wrap-input100 validate-input" id="phone">
            <input class="input100" id="online_phone" name="phone" type="tel" maxlength="50"
         autofocus="autofocus" required oninvalid="this.setCustomValidity('Введите правильно номер телефона')" oninput="setCustomValidity('')"
         value="<?=(isset($_POST['phone'])?$_POST['phone']:'+7(9__)___-__-__')?>"
         pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
         placeholder="+7(9__)___-__-__">

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
	</div>
  @extends('footer')

  <!-- хз для чего
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="js/create_form.js"></script>
<script>
$(document).ready(function() {
  $('.js-example-basic-single').select2({
    placeholder: "Выберите город"
  });
});
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
</body>
</html>
