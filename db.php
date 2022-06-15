<?php 
$host = 'sql210.epizy.com';
$db_name = 'epiz_31812996_ElementPavel';
$db_user = 'epiz_31812996';
$db_pass = 'lAL2SCc2wZr';

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) { // проверяем подключение
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
}
?>