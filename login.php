<?php 

require "db.php";

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
	<form method="POST" action="do_login.php" class="login">
	    <p>
	      <label for="login">Логин:</label>
	      <input type="text" name="login" id="login">
	    </p>

	    <p>
	      <label for="password">Пароль:</label>
	      <input type="password" name="password" id="password">
	    </p>

	    <p class="login-submit">
	      <button type="submit" class="login-button">Войти</button>
	    </p>
  	</form>
</body>
</html>