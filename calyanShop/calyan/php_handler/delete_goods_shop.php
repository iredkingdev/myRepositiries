<?php

require '../db/connect.php';

$delete = $_POST['delete'];
if(isset($_POST['delete_shop_goods'])){
    $delete_shop_goods = "DELETE FROM shop WHERE id = '$delete'";
    if(mysqli_query($connect, $delete_shop_goods)){
        echo "Товар удален";
        header('location: ../adminpanel.php?page=pa_shop');
    }
}


?>