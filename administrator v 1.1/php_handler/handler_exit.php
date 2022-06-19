<?php

    session_start();
    unset($_SESSION['login']);
    echo "Вы вышли";
    header('refresh: 2, url = ../index.php?page=main');
?>