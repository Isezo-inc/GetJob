<!--Фаил окна создания вакансии-->
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script>
        function getMessage(){
          $.ajax({
             type:'POST',
             url:'/reg_staffer/submit',
             dataType : 'json',
             data: {
                  _token: '{!! csrf_token() !!}',
                  email: $("#email").val(),
                  password: $("#pass").val(),
                  sname: $("#sname").val(),
                  fname: $("#fname").val(),
                },
             success:function(data){
                $("#msg").html(data.msg);
                if(data.rdrct==1){
                 var emailToSend = $('#email').val();
                  $('#toemail').val(emailToSend);
                  $('#mailsendform').submit();
                }
             }
          });
       }
    </script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/stafferstyle.css">
  <link rel="stylesheet" type="text/css" href="css/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
</head>
<body>
  @yield('content')
	<script src="js/create_form.js"></script>
</body>
</html>
