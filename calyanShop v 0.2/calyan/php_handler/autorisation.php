<?php
    require '../db/connect.php';
    

    $get_login = $_POST['my-login'];
    $get_password = $_POST['my-password'];

    if(isset($_POST['autoris'])){
        $sel = "SELECT * FROM new_user WHERE y_login = '$get_login' AND y_pass='$get_password'";
        $result = mysqli_query($connect, $sel);
        foreach($result as $row){
            $login_db = $row['y_login'];
            $password_db = $row['y_pass'];
        }
        if($get_login == $login_db && $get_password == $password_db){
            session_start();
            $_SESSION['login'] = $login_db;
            $_SESSION['password'] = $password_db;
            echo "Вы авторизовались";
            header('location: ../index.php?page=index');
        }else{
            echo "Вы не авторизовались";
        }
    }

?>