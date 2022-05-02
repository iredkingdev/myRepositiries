<?php

    require '../db/connect.php';
    /*$create_table_busket = "CREATE TABLE busket (id INTEGER AUTO_INCREMENT PRIMARY KEY, name_busket TEXT, descr_busket TEXT, price_busket decimal(6,2), weight_busket TEXT, hard_busket TEXT);";
    if(mysqli_query($connect, $create_table_busket)){
        echo 'корзина создана';
    }else{
        echo 'корзина не создана';
    }*/
    $name_goods = $_POST['name'];
    $description_goods = $_POST['description'];
    $price_goods = $_POST['price'];
    $weight_goods = $_POST['weight'];
    $hard_goods = $_POST['hard'];

    if(isset($_POST['add_busket'])){
        $inser_to_table_busket = "INSERT INTO busket (name_busket, descr_busket, price_busket, weight_busket, hard_busket)
        VALUES ('$name_goods', '$description_goods', '$price_goods', '$weight_goods', '$hard_goods');";
        if(mysqli_query($connect, $inser_to_table_busket)){
            echo 'Товар добавлен в корзину';
            header('location: ../index.php?page=shop');
        }else{
            echo 'Товар не добавлен в корзину';
        }
    }
    



?>