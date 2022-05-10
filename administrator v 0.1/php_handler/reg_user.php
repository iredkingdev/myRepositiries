<?php
    require 'db.php';
    /*if($connect -> connect_error){
        echo "Ошибка". $connect -> connect_error;
    }else{
        echo "Connect is ok";
    }*/
    /*$create_db_for_users = "CREATE DATABASE user_registration";
    if($connect -> query($create_db_for_users)){
        echo "database create";
    }else{
        echo "database create" . $connect ->error;
    }*/

    $data_registration_user = date("D M j G:i:s T Y");
    $generate_login = htmlentities(trim($_POST['generate-login']));
    $generate_email = htmlentities(trim($_POST['generate-email']));
    $generate_pass = htmlentities(password_hash($_POST['generate-pass'], PASSWORD_BCRYPT));
    $generate_rep_pass = htmlentities($_POST['generate-repeat-pass']);
    $enter_login = htmlentities(trim($_POST['input-user-login']));
    $enter_pass = htmlentities($_POST['input-user-pass']);
    /*$create_table_registration = "CREATE TABLE registration (id INTEGER AUTO_INCREMENT PRIMARY KEY, user_login TEXT, usel_email TEXT, user_pass TEXT, user_rep_pass TEXT, data_registration TEXT)";
    if($connect -> query($create_table_registration)){
        echo "table create";
    }else{
        echo "Error".$connect -> error;
    }
    if($generate_pass == password_verify($generate_rep_pass,$generate_pass)){ проверка на одинаковый ввод паролей
            echo "1";
        }else{
            echo "0";
    }*/

    if(isset($_POST['user-registration'])){
        
        $sel = "SELECT * FROM registration";

        if($result = $connect ->query($sel)){
            foreach($result as $row){
                $login_in_dataBase = $row['user_login'];
                $email_in_dataBase = $row['user_email'];
            }

            if( $generate_login != $login_in_dataBase && $generate_login != "" && $generate_pass == password_verify($generate_rep_pass, $generate_pass) && $generate_rep_pass !== ""
                && $generate_email != $email_in_dataBase && $generate_email !== ""){

                $add_data_registration_user = 
                "INSERT INTO registration (user_login, user_email, user_pass, data_registration) 
                VALUES ('$generate_login', '$generate_email', '$generate_pass', '$data_registration_user');";

                if($connect -> query($add_data_registration_user)){
                    echo "Пользователь зарегистрирован";
                    header('refresh: 2, url = ../index.php?page=enter');
                }
                else{
                    echo "Ошибка регистрации" . $connect->error;
                }

            }
            else if($generate_login === ""){
                echo "Введите корректное имя";
                header('refresh: 2, url = ../index.php?page=enter');
            }
            else if($generate_login == $login_in_dataBase){
                echo "Пользователь с таким логином зарегистрирован";
                header('refresh: 2, url = ../index.php?page=enter');
            }
            else if($generate_email == $email_in_dataBase){
                echo "Пользователь с таким email уже зарегистрирован";
                header('refresh: 2, url = ../index.php?page=enter');
            }
            else if($generate_email === ""){
                echo "Поле email заполнено не корректно";
                header('refresh: 2, url = ../index.php?page=enter');
            }
            else if($generate_rep_pass === ""){
                echo "Поля пороля заполнены не корректно";
                header('refresh: 2, url = ../index.php?page=enter');
            }
            else if(!password_verify($generate_rep_pass, $generate_pass)){
                echo "Пароли не сходятся";
                header('refresh: 2, url = ../index.php?page=enter');
            }
        }
    }   

    

    if(isset($_POST['user-autorisation'])){
        $sel = "SELECT * FROM registration";
        if($result = $connect->query($sel)){
            foreach($result as $row){
                $login_user_db = $row['user_login'];
                $password_user_db = $row['user_pass'];  
            }
            if($enter_login == $login_user_db && password_verify($enter_pass, $password_user_db)){
                session_start();
                $_SESSION['login'] = $login_user_db;
                echo "вошел в систему";
                header('refresh: 2, url = ../index.php?page=enter');
            } 
            else if($enter_login != $login_user_db){
                echo "Пользователь с логином " .$enter_login. " не найден";
                header('refresh: 2, url = ../index.php?page=enter');
            }
            else if(!password_verify($enter_pass, $password_user_db)){
                echo "Пароль от логина " .$enter_login. " не совпадает или введен не корректно";
                header('refresh: 2, url = ../index.php?page=enter');
            }
        }
    }

    
        
    
    

?>