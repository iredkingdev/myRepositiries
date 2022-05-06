<?php

    require_once '../db/db.php';
    $delete = $_POST['delet_photo'];
    if(isset($_POST['delet_photo_submit'])){
        $delete_qw = "DELETE FROM photo WHERE id = '$delete'";
        if(mysqli_query($connect, $delete_qw)){
            echo "Фото удалено";
            header("location: ../index.php?page=admin_enter");
        }
    }
?>