<?php

    session_start();
    unset($_SESSION['admin']);
    echo "Вы вышли";
    header('refresh: 2, url = ../index.php?page=admin_enter');


?>