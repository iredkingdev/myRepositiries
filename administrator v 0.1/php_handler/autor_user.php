<?php
    require 'db.php';
    $enter_login = htmlentities(trim($_POST['input-user-login']));
    $enter_pass = htmlentities($_POST['input-user-pass']);

    if(isset($_POST['user-autorisation'])){
        $sel = "SELECT * FROM registration";
        if($result = $connect->query($sel)){
            foreach($result as $row){
                $login_user_db = $row['user_login'];
                $password_user_db = $row['user_pass'];  
            }
            if($enter_login == $login_user_db && password_verify($enter_pass, $password_user_db)){
                session_start();
                $_SESSION['login'] = $login_user_db;
                echo "вошел в систему";
                header('refresh: 2, url = ../index.php?page=enter');
            } 
            else if($enter_login != $login_user_db){
                echo "Пользователь с логином " .$enter_login. " не найден";
                header('refresh: 2, url = ../index.php?page=enter');
            }
            else if(!password_verify($enter_pass, $password_user_db)){
                echo "Пароль от логина " .$enter_login. " не совпадает или введен не корректно";
                header('refresh: 2, url = ../index.php?page=enter');
            }
        }
    }


?>