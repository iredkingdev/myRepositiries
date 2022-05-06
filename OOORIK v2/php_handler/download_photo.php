<?php 
require_once '../db/db.php';
//1. создать путь к файлу
$create_src = '../gallery/' .time() .$_FILES['value_image']['name'];
//2. Загружаем файл

$value_name_photo = $_POST['name_image'];

if(isset($_POST['download_image'])){
    if(!isset($_FILES['value_image']) || $_FILES['value_image']['error'] == UPLOAD_ERR_NO_FILE){
        
        echo "Файл не выбран";
        header('refresh: 1, url = ../index.php?page=admin_enter');
    
    }else{

        move_uploaded_file($_FILES['value_image']['tmp_name'],$create_src);
        if(isset($_POST['download_image'])){
            $insert_photo = "INSERT INTO photo (name_photo, src_photo) VALUES ('$value_name_photo','$create_src');";
            if(mysqli_query($connect, $insert_photo)){
                echo 'Фото загружено';
                header('refresh: 1, url = ../index.php?page=admin_enter');
            }
        }
    
    }

}





?>