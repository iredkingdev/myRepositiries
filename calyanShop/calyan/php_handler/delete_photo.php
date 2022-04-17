<?php

require '../db/connect.php';

$delete = $_POST['delete-image'];
if(isset($_POST['image'])){
    $delete_shop_goods = "DELETE FROM photo WHERE id = '$delete'";
    if(mysqli_query($connect, $delete_shop_goods)){
        echo "Фото удален";
        header('location: ../adminpanel.php?page=pa_photo');
    }else{
        echo "Фото не  удален";
    }
}


?>