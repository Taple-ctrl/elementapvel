<?php 

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
    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
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
                    <li><a class="active" href="#">Главная</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#portfolio">Портфолио</a></li>
                    <li><a href="#aboutme">Обо мне</a></li>
                    <li><a href="#kontact">Контакты</a></li>
                </ul>
            </nav>
            <!-- <div class="header-btn">
                <a  href="#">Написать мне</a>
            </div> -->
        </div>
    </header>
    
    <div class="first-block">
        <div class="context">
            <div id="my-text-tittle" class="context-tittle">Привет, Я Павел</div>
            <div id="my-text-subtittle" class="context-subtittle">Креативный Веб-разработчик</div>
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
    
    <div class="two-block">
        <div class="two-block-text">
            <div class="two-block-tittle" id="services">ПРЕДОСТАВЛЯЕМЫЕ УСЛУГИ</div>
            <div class="two-block-subtittle">Создание компаний и брендов<br>& Цифровых проектов</div>
        </div>
        <div class="two-block-content">
            <div class="two-block-box">
                <img src="img/two-block/1.svg" alt="">
                <div class="two-block-box-tittle">
                   Графический дизайн
                </div>
                <div class="two-block-box-subtittle">
                    Выражение идей, смыслов и ценностей через образы, изображения, шрифты, видео и тп
                </div>
            </div>
            <div class="two-block-box">
                <img src="img/two-block/2.svg" alt="">
                <div class="two-block-box-tittle">
                   Веб дизайн
                </div>
                <div class="two-block-box-subtittle">
                    Отрасль веб-разработки и разновидность дизайна, которая проектирует веб-интерфейсы
                </div>
            </div>
            <div class="two-block-box">
                <img src="img/two-block/3.svg" alt="">
                <div class="two-block-box-tittle">
                   Приложения
                </div>
                <div class="two-block-box-subtittle">
                    Программа, для выполнения определённых задач и взаимодействие с пользователем
                </div>
            </div>
        </div>
    </div>

    <div class="three-block">
        <div class="two-block-text">
            <div class="three-block-tittle" id="portfolio">ПОРТФОЛИО</div>
            <div class="three-block-subtittle">Некоторые из моих<br>лучших работ</div>
        </div>
        <div class="container">
          <div class="card">
            <img src="img/three-block/master-dental.jpg">
            <div class="card__head">Master Dental</div>
          </div>
          <div class="card">
            <img src="img/three-block/comfort-sport.jpg">
            <div class="card__head">Comfort Sport</div>
          </div>
          <div class="card">
            <img src="img/three-block/cosmo.jpg">
            <div class="card__head">Cosmo</div>
          </div>
          <div class="card">
            <img src="img/three-block/dr-harness.jpg">
            <div class="card__head">Dr.Harness</div>
          </div>
          <div class="card">
            <img src="img/three-block/evklid.jpg">
            <div class="card__head">Евклид</div>
          </div>
        </div>
        <div class="three-block-btn">
            <a href="portfolio.php">Еще Работы</a>
        </div>
    </div>

    <div class="four-block">
        <div class="about-back" id="aboutme">Обо мне</div>
        <div class="about-inner-container">
            <div class="about-inner">
                <div class="about-inner-text">
                    <div class="about-inner-text-tittle">Обо мне</div>
                    <div class="about-inner-text-subtittle">Занимаюсь Веб-разработкой различных сайтов от лендингов до интернет-магазинов. Берусь только за ту работу, в которой разбираюсь. Всегда остаюсь на связи и помогаю по возникающим вопросам, даже через несколько месяцев после сдачи заказа.</div>
                    <div class="about-inner-text-btn"><a download href="img/cv.pdf">Скачать CV</a></div>
                </div>
                <div class="about-inner-img">
                    <img src="img/four-block/MyPhoto.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="five-block">
        <div class="five-block-box">
            <div class="five-block-box-number">20+</div>
            <div class="five-block-box-text">Все проекты</div>
        </div>
        <div class="five-block-box">
            <div class="five-block-box-number">3</div>
            <div class="five-block-box-text">Текущие проекты</div>
        </div>
        <div class="five-block-box">
            <div class="five-block-box-number">95%</div>
            <div class="five-block-box-text">Успех в работе</div>
        </div>
    </div>

    <div class="six-block">
        <div class="six-block-call">
            <div class="six-block-call-tittle" id="kontact">
                Давайте обсудим проект
            </div>
            <div class="six-block-call-subtittle">
                Всегда лучше поговорить с заказчиком чем переписываться в мессенджерах,<br>любой звонок лучше убедит вас в моем проффесионализме.
            </div>
            <div class="six-block-call-btn"><a href="tel:89524847154">Позвонить</a></div>
        </div>
    </div>

    <footer>
        <div class="footer-menu">
            <div class="footer-link">
                <a href="#">Обо мне</a>
                <a href="#">Услуги</a>
                <a href="#">Портфолио</a>
            </div>
            <div class="footer-social">
                <div class="footer-social-box">
                    <a href="#"><img src="img/footer/instagram.png" alt=""></a>
                </div>
                <div class="footer-social-box">
                    <a href="#"><img src="img/footer/tg.png" alt=""></a>
                </div>
                <div class="footer-social-box">
                    <a href="#"><img src="img/footer/vk.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="copyright">Copyright © 2022 All rights reserved | This site is made with by <font color="#5DB2FF">ElementPavel</font></div>
    </footer>
<script src="js/main.js"></script>
</body>
</html>