<?php 
require "db.php";

INSERT INTO `sites`(`name`, `category`, `description`, `img`) VALUES ('$namePAdd','$categoryPAdd','$descriptionPAdd','$imgadd')

$namePAdd = $_GET['namePortfolio-add'];
$categoryPAdd = $_GET['categoryPortfolio-add'];
$descriptionPAdd = $_GET['descriptionPortfolio-add'];
$imgadd = $_FILES['imgP-add']['name'];