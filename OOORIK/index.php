<?php
    session_start();
    if(isset($_GET['page'])){
        $array_pages = array('about','catalog','work','contact', 'policy');
        if(in_array($_GET['page'], $array_pages)){
            $page = $_GET['page'];
        }else{
            $page = 'about';
        }
    }else{
        $page = 'about';
    }


?>


<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/index/style.css">
    <link rel="apple-touch-icon" href="img/favicon_io/apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>ООО "РИК"</title>
</head>
<body>

    <div class="show-big-image">
        
    </div>

    <div class="wrapper">
        <header class="header">
            <div class="container">
                <section class="navigation">
                    <nav class="header-nav">
                        <h2 class="logo icon-location">ООО "РИК"</h2>
                        <div class="header-menu-mobile">
                            <div class="burger">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <ul class="header-ul">
                            <li><a href="index.php?page=about">Главная</a></li>
                            <li><a href="index.php?page=work">Работы</a></li>
                            <li><a href="index.php?page=catalog">Галлерея изделий</a></li>
                            <li><a href="index.php?page=contact">Контакты</a></li>
                        </ul>
                    </nav>
                    <article class="header-lozung">
                        <h2>Металлообработка - это наш профиль!</h2>
                    </article>
                    <div class="header-feedback">
                        
                        <div class="write">
                            <h4>Связаться с нами</h4>
                        </div>

                    </div>
                    <div class="header-div-pag">
                        <ul>
                            <li class="li-pag" id="first"></li>
                            <li class="li-pag" id="second"></li>
                            <li class="li-pag" id="thert"></li>
                        </ul>
                    </div>
                </section>
            </div>
        </header>
        
        <?php require $page.'.php'; ?>    
            
            
        <section class="section-feedback" id="feedback">
            <div class="container">
                <section class="feedback">
                    <div class="feedback_div">
                        <h2>Напишите нам</h2>
                        <p>
                            По всем и нтересующим вас вопросам, а так же если 
                            вас заинтересовало сотрудничество с нами пишите нам заполнив форму обратной связи. 
                            Так же вы можите приложить интересующий вас чертеж. Мы отвечаем быстро. Ждем вас.
                        </p>
                    </div>
                    <div class="feedback_form">
                        <form action="php_handler/write_me.php" class="generalForm" method="POST">
                            <input type="text" placeholder="Ваше имя" name="your-name">
                            <input type="text" placeholder="Ваш Email" name="your-email">
                            <input type="text" placeholder="Ваш телефон" name="your-phone">
                            <textarea name="your-message" id="" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
                          <!--<div class="generalForm_block-label">
                                <input type="file" name="" id="downloadFile" style="display: none;">
                                <label for="downloadFile">Загрузить чертеж</label>
                            </div> -->  
                            <div class="feedback-personal-data">
                            <input type="checkbox" name="checked" id="checkId" class="feedback-personal-data_input">
                            <label for="checkId" class="feedback-personal-data_label">
                                <div class="personal-data">
                                    <span>Даю свое согласие в соответсвии с</span>
                                    <a href="index.php?page=policy"> политикой обработки персональных данных</a>
                                </div>
                            </label>
                            </div>
                            <div class="feedback-button">
                                <button name="send">Отправить</button>
                            </div>   
                        </form>   
                    </div>
                </section>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <section class="footer-section">
                    <div class="footer-section_dev">
                        <h4>Разработчик</h4>
                        <div class="footer-section_dev-block">
                            <span>&copy Все права защищены 2022</span>
                            <span>Page designed: <a href="http://iredkingdev.ru/" class="">Ilya Redkin</a></span>
                        </div>
                    </div>
                    <div class="footer-section_about">
                        <h4>О нас</h4>
                        <div class="footer-section_dev-block">
                            <span><a href="index.php?page=contact">Контакты</a></span>
                            <span><a href="index.php?page=work">Специализации</a></span>
                            <span><a href="index.php?page=about">Главная</a></span>
                        </div>
                    </div>
                    <div class="footer-section_feed">
                        <h4>Контакты</h4>
                        <div class="footer-section_dev-block">
                            <span>Наш e-mail:<a href="mailto:llcporik@yandex.ru"> llcporik@yandex.ru</a></span>
                            <span class="icon-mobile"> 8(910)-142-06-53</span>
                            <span class="icon-viber"> 8(910)-142-06-53</span>
                            <span class="icon-location"> ул. Баумана, 10, Заволжье, Нижегородская обл., 606524</span>
                            <span class="icon-file-text"><a href="index.php?page=policy"> Политика обработки персональных данных</a> </span>
                        </div>  
                    </div>
                </section>
            </div>
        </footer>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">
    </script>
    <script src="scripts/paginationAndBackground.js"></script>
    <script src="scripts/scroll_to.js"></script>
    <script src="scripts/show_more.js"></script>
    <script src="scripts/slide.js"></script>
    <script src="scripts/gallery.js"></script>
    
</body>
</php>