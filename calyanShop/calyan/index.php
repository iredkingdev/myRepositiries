<?php
require 'db/connect.php';
    session_start();
    if(isset($_GET['page'])){
        $array_page = array('index_content', 'gallery', 'devilery', 'shop', 'busket');
        if(in_array($_GET['page'], $array_page)){
            $page = $_GET['page'];
        }else{
            $page = 'index_content';
        }
    }else{
        $page = 'index_content';
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index/index.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/font_family.css">
    <title>MistyHouse</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="header_smoke"></div>
            <div class="header_container">
                <section class="header_navigation">
                    <div>
                        <h2>
                            <a href="index.php">MistyHOUSE</a>
                        </h2>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="index.php?page=shop">Магазин</a></li>
                            <li><a href="index.php?page=gallery">Галлерея</a></li>
                            <li><a href="">Наш блог</a></li>
                            <li><a href="">Оплата</a></li>
                            <li><a href="index.php?page=devilery">Доставка</a></li>
                            <li><a href="">Контакты</a></li>
                            <li><a href="index.php?page=busket">Корзина</a></li>
                        </ul>
                    </nav>
                </section>
                <section class="header_hello">
                    <div>
                        <h3>Welcom to MistyHOUSE</h3>
                        <p>Рады вас видеть на нашей странице. 
                            Здесь вы можите забранировать столик 
                            в нашем баре или приобрести продукцию, 
                            которую мы предлагаем. Приятного просмотра.
                        </p>
                    </div>
                </section>
                <section class="header_button">
                    <div>
                        <div>Забранировать стол</div>
                    </div>
                </section>
            </div>
        </header>
        <?php  require 'php_section/'.$page.'.php'; ?>

        


        <section class="feedback">
            <div class="feedback_container">
                <section>
                    <h2>Закажи звонок</h2>
                    <p>
                        Здесь ты можешь заказать звонок, что бы забронировать место.
                        Пиши, мы ждем тебя!
                    </p>
                </section>
                <section class="feedback_form">
                    <form action="" method="">
                        <div class="name">
                            <input type="text" placeholder="Ваше Имя">
                            <input type="text" placeholder="Ваш Телефон">
                        </div>
                        <div class="button">
                            <input type="submit">
                        </div>
                    </form>
                </section>
            </div>
        </section>
        <footer>
            <div class="footer_container">
                <h2>КУРЕНИЕ ВРЕДИТ ВАШЕМУ ЗДОРОВЬЮ</h2>
                <section class="footer_content">
                    <nav>
                        <ul>
                            <li><a href="">Главная</a></li>
                            <li><a href="">Магазин</a></li>
                            <li><a href="">Галлерея</a></li>
                            <li><a href="">Наш блог</a></li>
                            <li><a href="">Оплата</a></li>
                            <li><a href="">Доставка</a></li>
                            <li><a href="">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="footer_content_name">
                        <p>Page designed <a href="#">Ilya Redkin</a></p>
                        <p><a href="#">Политика обработки персональных данных</a></p>
                        <p>Все права защищены <?php echo date('Y');?></p>
                    </div>
                    <div class="footer_content_social">
                        <h4>Найдите нас:</h4>
                        <ul>
                            <li><a href="" class="icon-twitter"> Twitter</a></li>
                            <li><a href="" class="icon-telegram"> Telegram</a></li>
                            <li><a href="" class="icon-vk1"> Vkontakte</a></li>
                        </ul>
                    </div>
                    <div></div>
                </section>
            </div>
        </footer>
    </div>   
</body>
</html>