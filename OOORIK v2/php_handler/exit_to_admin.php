<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    echo 'Вы вышли';
    header('refresh: 2, url = ../index.php?page=admin_enter');

?>