<?php
    require 'php_handler/db.php';
    echo '
        <section>
            <div class="con-default">
                <div class="reestablish">
                    <form action="" method="post" class="reestablish_form">
                        <input type="text" name="enter-email" placeholder = "Введите ваш email">
                        <input type="submit" name="reestablish-pass" value="Отправить">
                    </form>
                </div>
            </div>
        </section>
    ';   
    $neter_your_email = $_POST['enter-email'];
    
    if(isset($_POST['reestablish-pass'])){
        
        $sel = "SELECT * FROM registration WHERE user_email = '$neter_your_email'";
        if($result = $connect->query($sel)){   

            foreach($result as $index){
                //echo $index['user_email'] . "<br>";
            }  
            if($neter_your_email === $index['user_email']){
                session_start();
                $_SESSION['enter-email'] = $neter_your_email;
                
                echo '
                 <div class="reestablish">
                     <form action="" method="post" class="reestablish_form">
                         <input type="text" name="new-pass" placeholder = "Введите новый пароль">
                         <input type="text" name="rep-new-pass" placeholder = "Повторите новый пароль">
                         <input type="submit" name="continue-new-pass" value="Отправить">
                     </form>
                 </div>
                 '; 
                 //echo $_SESSION['enter-email'];
            }
            if($neter_your_email != $index['user_email']){
                echo 'Пользователь с email '.$neter_your_email.' не существует <br>';
                //echo $_SESSION['enter-email'];
                die();   
            }
            if($neter_your_email === ""){
                echo 'Поле email пустое';
                die();
            }  
        }else{
            echo $result = $connect->error;
        }
    } 

    if(isset($_POST['continue-new-pass'])){
        if($_SESSION['enter-email']){
            $email = $_SESSION['enter-email'];
            $new_pass = htmlentities(password_hash($_POST['new-pass'], PASSWORD_BCRYPT));
            $update_pass = "UPDATE registration SET user_pass = '$new_pass' WHERE user_email = '$email'";
            
            if($result = $connect->query($update_pass)){
    
               
    
               if($_POST['rep-new-pass'] == password_verify($_POST['rep-new-pass'], $new_pass)){
                   echo "Пароль заменен <br>";
                   unset($_SESSION['enter-email']);
                   echo $_SESSION['enter-email']; // сессия удалена
                   die();
               }
               else if($_POST['rep-new-pass'] != password_verify($_POST['rep-new-pass'], $new_pass)){
                   echo "Пароль не верен";
               }
               else if($_POST['rep-new-pass'] == ""){
                echo "Строка повтарения пароля пуста";
                }
            }else{
                echo $result = $connect->error;
            }

        }
        
    }
?>