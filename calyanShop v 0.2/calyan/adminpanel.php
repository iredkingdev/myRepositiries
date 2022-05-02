<?php
    require 'db/connect.php';
    require 'php_handler/loginandpassword.php'; 
    session_start();
    if($_SESSION["login"] != $login || $_SESSION["password"] != $password){
        header('Location: adminpanel_enterance.php');
    }

    if(isset($_GET['page'])){
        $pages = array('pa_photo', 'pa_blog', 'pa_shop');
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
        }else{
            $page ='pa_photo';
        }
    }else{
        $page ='pa_photo';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin/admin_enter/admin_enter.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/font_family.css">
    <title>AdminPanel</title>
</head>
<body>
    <div class="wrapper">
        <div class="enterance">
            <div class="enterance_container">
                <section class="enterance_container-head">
                    <div>
                        <h2>Панель администратора</h2>
                        <p>
                            Здесь вы персонализируете вашу страцу. Загружаете фотографии и добавляете товары.
                        </p>
                        <a href="index.php">На главную</a>
                    </div>
                </section>
                <section class="enterance_container-enter">
                <section class="admin">
                    <nav class="admin_nav">
                        <ul>
                            <li class="admin-time">22:20:21</li>
                            <li><a href="" class="icon-undo undo"></a></li>
                            <li><a href="php_handler/exit_to_admin.php">Выход</a></li>
                        </ul>
                    </nav>
                    <section class="admin_panel">
                        <nav class="admin_panel-nav">
                            <div>
                                <h3>Панель управления</h3>
                            </div>
                            <ul>
                                <li><a href="adminpanel.php?page=pa_photo">Настройка галлереи</a></li>
                                <li><a href="adminpanel.php?page=pa_blog">Настройка блога</a></li>
                                <li><a href="adminpanel.php?page=pa_shop">Настройка магазина</a></li>
                            </ul>
                        </nav>
                    </section>
                    <section class="admin_content">
                        <div>
                            <p>Здесь будут представленны все настройки, взависимости от того, что вы выберите в панеле управления.</p>
                        </div>
                        <?php require 'php_section/'.$page.'.php'; ?>

                        

                    </section>
                </section>      
                </section> 
            </div>
        </div>
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