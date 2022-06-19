<?php
require 'db.php';

$sel = "SELECT * FROM registration";
$result = $connect->query($sel);
foreach($result as $row){
    $user_login = $row['user_login'];
    $user_lock = $row['lock_user'];
    $user_id = $row['id'];
    
}   
 
if($user_lock == 1){
    $unlock_user = "UPDATE registration SET lock_user = 0 WHERE id = '$get_post_delete_id'";
    $connect->query($unlock_user);
    echo "Поьзователь '$get_post_delete_id' разблокирован";
    echo $connect->error;
}else if($user_lock == 0){
    $lock_user = "UPDATE registration SET lock_user = 1 WHERE id = '$get_post_delete_id'";
    $connect->query($lock_user);
    echo "Поьзователь '$get_post_delete_id' заблокирован";
}







?>