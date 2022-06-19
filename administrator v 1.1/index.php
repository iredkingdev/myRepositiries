<?php
    
    session_start();
    if(isset($_GET['page'])){
        $array_pages = array('main', 'enter', 'administrator', 'admin_enter', 'reestablish_pass');
        /*if($_GET['page'] != $array_page('reestablish_pass')){
            unset($_SESSION['enter-email']);
        }*/
        if(in_array($_GET['page'], $array_pages)){
            $page = $_GET['page'];
        }else{
            $page = 'main';
        }
    }else{
        $page = 'main';
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_fonts/stylesheet.css">
    <link rel="stylesheet" href="f_icons/f_icons.css">
    <link rel="stylesheet" href="styles/index/index.css">
    <title>Welcome</title>
</head>
<body>
    
    <div class="wrapper">

        <header class="">
            <div class="con-default">
                <nav class="nav">

                    <div class="nav_block-brand">
                        <h2>Welcome</h2>
                    </div>

                    <div class="nav_block-list">

                        <ul class="nav_ul">
                            <li class="nav_li">
                                <a href="index.php?page=main" id="main">Главная</a>
                            </li>
                            <li class="nav_li">
                                <a href="#">Новости</a>
                            </li>
                            <li class="nav_li">
                                <a href="#">Галлерея</a>
                            </li>
                            <li class="nav_li">
                                <a href="#">Достижения</a>
                            </li>
                            <li class="nav_li" >
                                <a href="index.php?page=enter" id="enter">Вход</a>
                            </li>
                        </ul>

                    </div>

                </nav>
            </div>
        </header>

        <main>
            <?php echo $_SESSION['enter-email']?>
            <?php require $page.".php"; ?>
            
            
        </main>
        <footer>
            <div class="con-default" style="padding: 20px 0; background: #ccc;">
               
            </div>
        </footer>
    </div>




    <script>
        let href_location = window.location;
        if(href_location == 'http://administrator/index.php?page=enter'){
                console.log('Вход');
                let get_id_nav_li = document.getElementById('enter');
                get_id_nav_li.classList.toggle('nav_li-active');
        }

        if(href_location == 'http://administrator/index.php?page=main'){
                console.log('Вход');
                let get_id_nav_li = document.getElementById('main');
                get_id_nav_li.classList.toggle('nav_li-active');
        }else if(href_location == 'http://administrator/'){
            console.log('Вход');
            let get_id_nav_li = document.getElementById('main');
            get_id_nav_li.classList.toggle('nav_li-active');
        }
        
        
    </script>


    <script>
        

    </script>

    

</body>
</html>