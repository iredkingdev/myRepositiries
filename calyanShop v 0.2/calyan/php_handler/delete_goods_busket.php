<?php

require '../db/connect.php';

$get_id_goods = $_POST['delete_goods_busket'];
if(isset($_POST['delete_goods_busket'])){
    $delete_row = "DELETE FROM busket WHERE id = '$get_id_goods'";
    if(mysqli_query($connect, $delete_row)){
        echo 'Товар удален из корзины';
        header('location: ../index.php?page=busket');
    }else{
        echo 'Товар не удален из корзины';
    }
}



?>