<?php

require_once 'db.php';

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($mysqli, "SELECT * FROM `users` where `login` = '$login' and `password` = '$password'");

if( mysqli_num_rows($count) == 0){
    echo 'вы не зареганы';
}else{
    Header('Location: adminpanel.php');
    $_SESSION['count'] = 1;
};
?>
