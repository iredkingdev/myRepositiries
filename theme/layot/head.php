<?php
if(isset($_SERVER['QUERY_STRING'])){
    $arrPages = [
        'home' => 'page=home',
        'contacts' => 'page=contact',
        'index' => '/theme/index.php',
    ];
    if($_SERVER['QUERY_STRING'] == $arrPages['home']){
        $title = 'Главная';
    }
    if($_SERVER['SCRIPT_NAME'] == $arrPages['index']){
        $title = 'Главная';
    }
    if($_SERVER['QUERY_STRING'] == $arrPages['contacts']){
        $title = 'Контакты';
    }
}else{
    $title = 'Главная';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title><?php echo $title ?></title>
    
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/app/assets/dist/assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/app/assets/dist/css/styles.css" rel="stylesheet" />
    
    <!-- <script src="/app/assets/dist/js/scripts.js"></script>-->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark qqq">
        <div class="container">
            <a class="navbar-brand" href="/">🏡</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php?page=home">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=contact">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>



<!--<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
</head>
<body>
Responsive navbar-->



