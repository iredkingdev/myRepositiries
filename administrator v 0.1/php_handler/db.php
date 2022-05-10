<?php
    $connect = new mysqli('localhost', 'root', '', 'user_registration');
    if($connect -> connect_error){
        echo "Ошибка". $connect_admin_admin -> connect_error;
    }else{
        echo "Connect is ok";
    }
    $connect_admin = new mysqli('localhost', 'root', '', 'admin_registration');

?>