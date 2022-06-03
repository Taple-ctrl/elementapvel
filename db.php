<?php 
$host = 'localhost';
$db_name = 'elementpavel';
$db_user = 'root';
$db_pass = 'root';

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) { // проверяем подключение
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
}
?>