<?php
    require '../db/connect.php';
    $src_file_goods = '../goods/'.time() .$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $src_file_goods);

    $name_tob = $_POST['name'];
    $descript_tob = $_POST['descript'];
    $weight_tob = $_POST['weight'];
    $hard = $_POST['hard'];
    $price_tob = $_POST['price'];

    if(isset($_POST['download-shop'])){
        $insert_to_table_shop = "INSERT INTO shop (name_tobaco, descr_tobaco, weight_tobaco, hard_tobaco, price_tobaco, src_tobaco) 
        VALUES ('$name_tob', '$descript_tob', '$weight_tob', '$hard', '$price_tob', '$src_file_goods');";
        if(mysqli_query($connect, $insert_to_table_shop)){
            echo 'Товар Загружен';
        header('location: ../adminpanel.php?page=pa_shop');
        }else{
            echo 'Товар не Загружен';
        }
    }
    


?>