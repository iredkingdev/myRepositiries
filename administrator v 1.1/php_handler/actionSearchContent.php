<?php
    require 'db.php';
    session_start();
    if(isset($_POST['refreshSearchContent'])){
        echo 'Page is refresh';
        header('refresh: 1, url = ../index.php?page=main');
    }

    $namePost = $_POST['namePost'];
    $descriptPost = $_POST['descriptPost'];
    $imagePost = $_FILES['imagePost'];
    $getDate = date('Y-m-d H:i');
    $nameAdmin = $_SESSION['admin'];
    $like_img = 0;
    $d_like_img = 0;
    $src_file_img = '../dw_img/'. time() . $_FILES['imagePost']['name']; //создали путь к файлу
    move_uploaded_file($_FILES['imagePost']['tmp_name'], $src_file_img);
    
    if(isset($_POST['addPost'])){
        if($_SESSION['admin']){
            $insert = "INSERT INTO addAdminContent (mane_Admin, head_Post, descript_Post, image_Post, like_Post, dlike_Post, data_Post)
            VALUES ('$nameAdmin', '$namePost', '$descriptPost', '$src_file_img', '$like_img', '$d_like_img', '$getDate')";
            if($result = $connect_admin->query($insert)){
                echo "Данные добавлены";
                header('refresh: 2, url = ../index.php?page=administrator');
            }else{
                echo $result = $connect_admin->error;
            }
        }
    }

    if(isset($_POST['send-coment'])){
        if($_SESSION['login']){
            $post_id = $_POST['send-coment-id'];
            $nameUser = $_SESSION['login'];
            $text = $_POST['text-coment'];
            
            $insert_coment = "INSERT INTO coments_post (post_id, name_user, comment_user, data_post) 
            VALUES ('$post_id', '$nameUser', '$text', '$getDate')";
            if($result = $connect_admin->query($insert_coment)){
                echo 'data is insert';
                header('refresh: 2, url = ../index.php?page=main');
            }else{
                echo $result = $connect_admin->error;
            }
        }else{
            echo 'Авторизируйтесь, что бы оставлять комментарии';
            header('refresh: 2, url = ../index.php?page=main');
        }
    }






?>