<?php 

require "db.php";

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($mysqli, "SELECT * FROM `users` where `login` = '$login' and `password` = '$password'");

if (isset($_POST['submit'])) {
	if( mysqli_num_rows($count) == 0){
    	$error = 'Данные неправильные';
	}else{
    	Header('Location: adminpanel.php');
    	$_SESSION['count'] = 1;
	};
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>AdminPanel</title>
</head>
<body>
	<div class="login-pos">
		<form method="POST" action="" class="login">
			<div class="login-tittle">ELementPavel</div>
		    <p class="login-box">
		      <label for="login">Логин:</label>
		      <input class="login-input" type="text" name="login" id="login">
		    </p>

		    <p class="login-box">
		      <label for="password">Пароль:</label>
		      <input class="login-input" type="password" name="password" id="password">
		    </p>

		    <p class="login-submit">
		      <button name="submit" type="submit" class="login-button">Войти</button>
		    </p>
		    <div class="login-error"><?php echo $error ?></div>
	  	</form>
	</div>
</body>
</html>