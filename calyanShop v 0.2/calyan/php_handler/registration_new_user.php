<?php

    require '../db/connect.php';
    
    
    $a = $_POST['your-login'];
    $b = $_POST['your-name'];
    $c = $_POST['your-sername'];
    $d = $_POST['your-patronymic'];
    $e = $_POST['your-age'];
    $f = $_POST['your-city'];
    $g = $_POST['your-pass'];
    $h = $_POST['your-pass-repite'];
    $message_array = array('Пользователь с таким логином уже существует', 'Парорли не совподают', 'пользователь создан');

    if(isset($_POST['registration'])){
        $sel = "SELECT * FROM new_user WHERE y_login = '$a'";
        $result = mysqli_query($connect, $sel);
        foreach($result as $row){
            $login = $row['y_login'];
        }
        if($g == $h && $a != $login){
            $insert_data_about_new_user = "INSERT INTO new_user (y_login, y_name, y_sername, y_patronymic, y_age, y_city, y_pass, y_pass_rep) 
            VALUES ('$a','$b','$c','$d','$e','$f','$g','$h');";
            if(mysqli_query($connect, $insert_data_about_new_user)){
                echo $message_array[2];
                header('Refresh: 2, url= ../index.php?page=registration');
                
            }else{
                echo "Пользователь не создан";
                header('Refresh: 2, url= ../index.php?page=registration');
            }
        }else if($a == $login){
            echo $message_array[0];
            header('location: ../index.php?page=registration');
        }
        else if($g != $h){
            echo $message_array[1];
            header('location: ../index.php?page=registration');
        }
    }
    



?>