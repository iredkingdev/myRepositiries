<?php

    require '../db/connect.php';
    session_start();
    $get_id = $_POST['add_like_id'];
    $get_count_like = $_POST['count_like']+1;
    
    if(isset($_POST['add_like'])){     
        if($_SESSION['login'] && $_SESSION['password']){
            $insert_like = "UPDATE photo SET like_photo= '$get_count_like' WHERE id='$get_id'";
            if(mysqli_query($connect, $insert_like)){
                echo 'Лайк добавлен';
                header('location: ../index.php?page=gallery');
            }else{
                echo 'Лайк не добавлен';
                header('location: ../index.php?page=gallery');
            }
        }else if(!$_SESSION['login'] && !$_SESSION['password']){
            echo "Чтобы оценивать фотографии, авторизуйтесь";
            header('Refresh:3, url= ../index.php?page=gallery');
        } 
    }

?>