<?php

require '../db/connect.php';
$src_file_photo = '../gallery/'. time() . $_FILES['image']['name']; // создали путь

move_uploaded_file($_FILES['image']['tmp_name'], $src_file_photo);//загружаем файл
if(isset($_POST['download-photo'])){
    $insert_to_table_photo = "INSERT INTO photo (src_photo, get_date) 
    VALUES ('$src_file_photo','$getTime');";
    if(mysqli_query($connect, $insert_to_table_photo)){
        echo 'Фото загружено';
        header("location: ../index.php?page=gallery");
    }else{
        echo 'Фото не загружено';
    }
}

?>