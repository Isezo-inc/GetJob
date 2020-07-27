<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<center>
  <div>
  <div>
      <h1><font style="color:#bf2e1a">Прежде, чем мы</font><font style="color:#17a2b8;"> начнем ...</font></h1>
  </div>
  <div>
      <h3><font>Здравствуйте, {{$fname}}, благодарим за регистрацию. Чтобы получить доступ к функциям нашего ресурса необходимо подтвердить адрес электронной почты. Данный адрес будет использоваться для общения с работодателями</font></h3>
      <h6>Не регистрировались на нашем ресурсе?<a href="mailto:slavicvitec@gmail.com">Свяжитесь с нами</a></h6>
      <a href="{{route('confmail')}}?hash={{$hash}}&email={{$email}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Подтвердить</a>
  </div>
  </div>
</center>
