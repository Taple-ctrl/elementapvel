<?php 
require "db.php";

$namePAdd = $_GET['namePortfolio-add'];
$categoryPAdd = $_GET['categoryPortfolio-add'];
$descriptionPAdd = $_GET['descriptionPortfolio-add'];
$imgadd = $_FILES['imgP-add']['name'];

INSERT INTO `sites`(`name`, `category`, `description`, `img`) VALUES ('$namePAdd','$categoryPAdd','$descriptionPAdd','$imgadd')

