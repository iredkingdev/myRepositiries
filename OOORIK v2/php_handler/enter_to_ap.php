<?php
    require_once '../db/db.php';

    $value_login = $_POST['login'];
    $value_password = $_POST['pass'];

    if(isset($_POST['submit_to_panel'])){
        $sel = "SELECT * FROM admin WHERE login = '$value_login' AND password = '$value_password'";
        if($result = mysqli_query($connect, $sel)){
            foreach($result as $row){
                $login_in_db = $row['login'];
                $password_in_db = $row['password'];
            }

            if($value_login === $login_in_db && $value_password === $password_in_db){
                session_start();
                $_SESSION['login'] = $login_in_db;
                echo 'Вы авторизовались';
                header('refresh: 1, url = ../index.php?page=admin_enter');
            }else{
                echo 'Вы не авторизовались';
                header('refresh: 1, url = ../index.php?page=admin_enter');
            }
        }
    }


?>