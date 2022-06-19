<?php
    require 'db.php'; /// Тестовый файл
    $search_line = $_POST['search_line'];
    
    if(isset($_POST['search_user'])){
        $sel = "SELECT * FROM registration WHERE user_login LIKE '%$search_line%' OR user_email LIKE '%$search_line%'";
        if($result = $connect->query($sel)){
            foreach($result as $row){
                
            }
            
        }else{
            echo $result = $connect->error;
        }
        if($search_line != "" && $search_line === $row['user_login'] || $search_line === $row['user_email']){
            echo   '
                <table class="a-panel_users_table">
                    <tr>
                        <th>Логин
                            <span>A-я</span>
                        </th>
                        <th>E-mail
                            <span>A-я</span>
                        </th>
                        <th>Дата регистрации
                            <span>A-я</span>
                        </th>
                        <th>Действия
                            
                        </th>
                    </tr>
                                    
                    <tr>
                        <td>'.$row['user_login'].'</td>
                        <td>'.$row['user_email'].'</td>
                        <td>'.$row['data_registration'].'</td>
                        <td class="setting">
                            <form action="handler_delete_user.php" method="post">
                                <input type="hidden" name="delete-user-id" value="'.$row['id'].'">
                                <input type="submit" name="delete-user-send" value="удалить">
                            </form>
                        </td>
                    </tr>
    
                </table>
            
            
            ';
        }else if($search_line == ""){
            echo "Поиск пуст";
            header('refresh: 2, url = ../index.php?page=administrator');
        }
        else if($search_line !== $row['user_login']){
            echo "Пользователя ".$search_line." не существует";
            header('refresh: 2, url = ../index.php?page=administrator');
        }
        else if($search_line !== $row['user_email']){
            echo "Такого email нет";
            header('refresh: 2, url = ../index.php?page=administrator');
        }
    }



?>