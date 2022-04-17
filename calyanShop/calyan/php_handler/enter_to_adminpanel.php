<?php

require 'loginandpassword.php';
$login_post = strip_tags($_POST['login']);
$password_post = strip_tags($_POST['password']);
if(isset($_POST['submit'])){
    if($login_post == $login && $password_post == $password){
        session_start();
        $_SESSION['login'] = $login_post;
        $_SESSION['password'] = $password_post;
        header('location: ../adminpanel.php');
    }else{
        $err = 'Неверная пара логин/пароль';
        echo 'Неверная пара логин/пароль';
        header('Refresh:1, ../adminpanel_enterance.php');
    }
}else{
    return false;
}



?>