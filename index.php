<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Форма регистрации</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.container{
			/*width: 100%;
			height: 100vh;
			background: url(images/paper3.gif) center no-repeat;		
			*/
		}
		.image{
			 /* The image used */
  			background-image: url("images/paper6.gif");
  			height: 100%; 
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;	
		
		}	

	
	</style>

</head>
<body>
<div class="image">
	<!-- <h1>Форма регистрации</h1> -->
	<div class="container mt-4">
		
		<?php
			if($_COOKIE['user'] == ''):		
		?>	
	
		<div class="row">	
			<div class="col">
			<h1>Форма регистрации</h1>
			<form action="validations/check.php" method="post">
			<input type="text" class="form-control" name="login"
			id="login" placeholder="Введите логин"><br>
			
			<input type="text" class="form-control" name="name"
			id="name" placeholder="Введите имя"><br>
			
			<input type="password" class="form-control" name="password"
			id="password" placeholder="Введите пароль"><br>
			
			<button class="btn btn-success" type="submit">Зарегистрироваться</!button>
			</form>
			</div>	
		
			<div class="col">
			<h1>Форма авторизации</h1>
			<form action="validations/auth.php" method="post">
			<input type="text" class="form-control" name="login"
			id="login" placeholder="Введите логин"><br>
						
			<input type="password" class="form-control" name="password"
			id="password" placeholder="Введите пароль"><br>
			
			<button class="btn btn-success" type="submit">Войти</!button>
		
			</form>
			</div>
		<?php else:?>	
		<p style="background-color:Tomato;">Привет <?=$_COOKIE['user']?>.Чтобы выйти нажмите <a href="validations/exit.php">здесь</a>.</p>
			
			

		<?php endif;?>
			
		</div>		
		
	</div>
</div>	
</body>
</html>	
