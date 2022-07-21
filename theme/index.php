<?php 
    if(isset($_GET['page'])){
        $array_pages = array('home', 'contact');
        if(in_array($_GET['page'], $array_pages)){
            $page = $_GET['page'];
        }else{
            $page = 'home';
        }
    }else{
        $page = 'home';
    }
    require  'layot/head.php';
    require $page.".php";
    require  'layot/footer.php';
    
?>
<link rel="stylesheet" href="style/style.css">