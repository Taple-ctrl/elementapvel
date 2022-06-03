<?php 
require "db.php";

	$portfoliolistcheck = mysqli_query($mysqli, "SELECT * FROM `sites`");

    $idP = $_POST['idP'];
	$nameP = $_POST['namePortfolio'];
	$categoryP = $_POST['categoryPortfolio'];
	$descriptionP = $_POST['descriptionPortfolio'];
	$imgCheck = $_FILES['imgP']['name'];
	if ($imgCheck == "") {
		$portcheck = mysqli_fetch_assoc($portfoliolistcheck);
		$imgP = $portcheck['img'];
	}else{
		$imgP = $_FILES['imgP']['name'];
	}

	if (isset($_POST["submit"])) {
		$update = mysqli_query($mysqli, "UPDATE `sites` SET `id`= '$idP',`name`= '$nameP',`category`='$categoryP',`description`='$descriptionP',`img`='$imgP'WHERE `id`= '$idP'");

      	//Если вставка прошла успешно
      	if ($update) {
        	echo $imgP;
      	} else {
        	echo '<p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p>';
      	}
      	if(move_uploaded_file($_FILES['imgP']['tmp_name'], 'img/portfolio/'.$_FILES['imgP']['name'])){
      		echo 'Файл скопирован на сервер';
    	} else{
    		echo 'Файл не скопирован на сервер';
    	}
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style-adminpanel.css">
	<title>AdminPanel</title>
</head>
<body>

	<div class="admin-inner">
		<div class="box-setting">
			<div class="box-setting-tittle">
				ElementPavel
			</div>
			<div class="box-setting-menu">
				<div class="box-setting-menu-tittle">Меню</div>
				<div class="box-setting-menu-nav">
					<div class="box-setting-menu-link">Основные настройки</div>
					<div class="box-setting-menu-link link-active">Настройки портфолио</div>
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="box-content-mainS">

			</div>
			<div class="box-content-settingP">
				<div class="box-content-settingP-list">
					<div class="box-content-settingP-nav active-nav">Список портфолио</div>
					<div class="box-content-settingP-nav">Добавить портфолио</div>
				</div>
				<div class="list-portfolio">
					<?php
						$portfoliolist = mysqli_query($mysqli, "SELECT * FROM `sites`");
					?>
			        <?php
			            while( $portf = mysqli_fetch_assoc($portfoliolist) )
			            {
			                ?>
	                        <form method="post"  class='portfolio-box' enctype="multipart/form-data">
	                        	<input class="portfolioID" name="idP" value="<?php echo $portf['id'] ?>">
	                            <img class="portfolio-img" src="img/portfolio/<?php echo $portf['img']?>" alt="">
	                            <div>
	                            	<input name="imgP" type="file" value="img/portfolio/<?php echo $portf['img']?>" multiple accept="image/jpeg"> Сейчас: <?php echo $portf['img'] ?>
	                            </div>
	                            <input name="namePortfolio" type="text" value="<?php echo $portf['name'] ?>">
	                            <input name="categoryPortfolio" type="text" value="<?php echo $portf['category'] ?>">
	                            <textarea class="descriptionPortfolio" name="descriptionPortfolio" id="" cols="10" rows="5"><?php echo mb_substr($portf['description'],0,1000,'utf-8') ?></textarea>
	                            <button type="submit" name="submit">Сохранить</button>

	                        </form>
			                <?php
			            }
			        ?>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>