<?php
    require "../db/connect.php";
    session_start();
    
        $get_id = $_POST['add_dlike_id'];
        $get_count_dlike = $_POST['count_dlike'] +1;
        if(isset($_POST['add_dlike'])){
            if($_SESSION['login'] && $_SESSION['password']){
                $insert_dlike = "UPDATE photo SET deslike_photo = '$get_count_dlike' WHERE id = '$get_id'";
                if(mysqli_query($connect, $insert_dlike)){
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