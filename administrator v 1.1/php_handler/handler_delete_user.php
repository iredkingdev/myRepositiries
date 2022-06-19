<?php
    require 'db.php';
    $get_post_delete_id = $_POST['delete-user-id'];
    $get_post_lock_user_id = $_POST['lock-user-id'];
   
    if(isset($_POST['delete-user-send'])){
        $del_user = "DELETE FROM registration WHERE id = '$get_post_delete_id'";
        if($connect->query($del_user)){
            header('location: ../index.php?page=administrator');
            echo "Пользователь удален";
            
        }else{
            echo $connect->error;
        }
    }else{
        echo "Ошибка";
        //header('Refresh: 1, url = ../index.php?page=administrator');
    }

    
        
   // 
    if(isset($_POST['lock-user-send'])){
        $sel = "SELECT * FROM registration WHERE id = '$get_post_lock_user_id'";
        $result = $connect->query($sel);
        foreach($result as $row){
            
        }  

        if($row['lock_user'] == 1){
            $unlock_user = "UPDATE registration SET lock_user = 0 WHERE id = '$get_post_lock_user_id'";
            $unlock = $connect->query($unlock_user);
            echo 'Пользователь разблокирован';
            header('refresh: 2, url = ../index.php?page=administrator');
        }
        
        if($row['lock_user'] == 0){
            $unlock_user = "UPDATE registration SET lock_user = 1 WHERE id = '$get_post_lock_user_id'";
            $unlock = $connect->query($unlock_user);
            echo 'Пользователь заблокирован';
            header('refresh: 2, url = ../index.php?page=administrator');
        }
        
    }    

        
        
        
        
        
        
        
        
        
        
    /*    //$lock = 1;
        $lock_user = "UPDATE registration SET lock_user = 1 WHERE id = '$get_post_delete_id'";
        $connect->query($lock_user);
        if($user_lock == 1){
            echo "Пользователь ".$get_post_delete_id."  заблокирован";
            header('Refresh: 4, url = ../index.php?page=administrator');
            
        }
    }

    if(isset($_POST['unlock-user-send'])){
        //$unlock = 0;
        $lock_user = "UPDATE registration SET lock_user = '0' WHERE id = '$get_post_delete_id'";
        $connect->query($lock_user);
        if($user_lock == 0){
            echo "Пользователь ".$get_post_delete_id." разблокирован";
            header('Refresh: 4, url = ../index.php?page=administrator');
            
        }
    }
    */


?>