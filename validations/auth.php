<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);
	
	$password = md5($password."gywfduf567423"); //функция Хеша для пароля + немного соли

	$mysql = new mysqli('localhost','root','root','registerform-bd');
	
	$result = $mysql->query("SELECT * FROM `regsql` WHERE `login` = '$login' AND `password` = '$password'");
							
	$user = $result->fetch_assoc(); //  Конвертация данных в привычный массив						
	
	if(count($user) == 0) {
			echo "Такой пользователь не найден";
			exit();		
	}

	// print_r($user);
	// exit();	
	
	setcookie('user', $user['name'], time() + 3600, "/");
		

	
	$mysql->close();
	
	header('Location: /');	
?>