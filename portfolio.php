<?php 
require "db.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElementPavel</title>
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css">
    <!-- Css -->
    <link rel="stylesheet" href="css/style-portfolio.css">
</head>
<body>
    <a class="back_to_top" title="Наверх">↑</a>
    <header>
        <div class="header-inner">
            <div class="logo">
                <a href="index.html" class="logo">
                    ElementPavel
                </a>
            </div>
            <nav>
                <ul class="navigation">
                    <li><a class="active" href="index.html">Вернуться</a></li>
                </ul>
            </nav>
            <div class="header-btn">
                <a  href="#">Написать мне</a>
            </div>
        </div>
    </header>
    
    <div class="first-block">
        <div class="context">
            <div id="my-text-tittle" class="context-tittle">Портфолио</div>
        </div>
        <div class="area" >
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    
    <div class="portfolio-list">
        <?php
            $portfoliolist = mysqli_query($mysqli, "SELECT * FROM `sites`");
        ?>
        <?php
            while( $portf = mysqli_fetch_assoc($portfoliolist) )
            {
                ?>  <a href="pages/portfolio.php?id=<?php echo $portf['id'] ?>">
                        <div class='portfolio-box'>
                            <img class="portfolio-img" src="img/portfolio/<?php echo $portf['img'] ?>" alt="">
                            <div class='portfolio-tittle'><?php echo $portf['name'] ?></div>
                            <div class='portfolio-category'><?php echo $portf['category'] ?></div>
                            <div class='portfolio-description'><?php echo mb_substr($portf['description'],0,100,'utf-8') ?>...</div>
                        </div>
                    </a>
                <?php
            }
        ?>
    </div>

</body>