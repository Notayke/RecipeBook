<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=URL?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>/css/main.css">
    <link rel="stylesheet" href="<?=URL?>/css/pace.css">
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?=URL?>/js/bootstrap.min.js"></script>

    <title><?=$title?></title>
	
	<script>
		paceOptions = {
		  elements: true
		};
	</script>
	<script src="<?=URL?>/js/pace.min.js"></script>
	<script>
		$(document).ready(function(){
			
			$("#exit").click(function() {
					document.querySelector('.pace').classList.add('pace-active');
					$.ajax({
					  type: "POST",
					  url: "<?=URL?>?action=ajax&method=exit",
					  data: "",
					  success: function(msg){
						setTimeout(function(){
							document.querySelector('.pace').classList.remove('pace-active');
							if (msg == "ERROR1") {
								alert("Пользователь не авторизован!");
							}else if (msg == "SUCCESS") {
								location.reload();
							}
							
						},500)
					  }
					});
			});
			
			$("#loginForm").submit(function (e) {
				e.preventDefault();
				
				var login = $("#login").val();
				var password = $("#password").val();
				
				if (login != "" && password != "") {
					document.querySelector('.pace').classList.add('pace-active');
					$.ajax({
					  type: "POST",
					  url: "<?=URL?>?action=ajax&method=auth",
					  data: "login="+login+"&password="+password,
					  success: function(msg){
						setTimeout(function(){
							document.querySelector('.pace').classList.remove('pace-active');
							
							if (msg == "ERROR1") {
								alert("Заполните все поля!");
							}else if (msg == "ERROR2") {
								alert("Пользователь не найден!");
							}else if (msg == "ERROR3") {
								alert("Пароль не верен!");
							}else if (msg == "SUCCESS") {
								location.reload();
							}
							
						},500)
					  }
					});
				}
					
				return false;
			});
			
		});
	</script>
	
  </head>
  <body>