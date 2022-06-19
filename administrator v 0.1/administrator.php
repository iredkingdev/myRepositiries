<?php
    require 'php_handler/db.php';
    session_start();
    if($_SESSION['admin']){
        $message = $_SESSION['admin'] . ' <a href="php_handler/exit_admin.php">Выйти</a>';
    }else{
        header('location: index.php?page=admin_enter');
    }
    
    echo '
    <div class="con-default height-con">
        <section class="administrator">
            <h3>Вы вошли как администратор: '.$message.'
                
            </h3>
            <section class="administrator_visual">
                <div class="a-panel">
                    <span class="active-a-panel">
                        Пользователи
                    </span>
                    <span class="">
                        Добавить контент
                    </span>
                    <span class="">
                        История заказов
                    </span>
                </div>
            

            
                <div class="a-panel_users">
                
                    <form action="" method="post">
                        <input type="text" name="search_line" id="" placeholder="Поиск пользователя">
                        <input type="submit" value="Поиск" name="search_user">
                        <input type="submit" value="Сброс">
                    </form>
                    ';
                    if($_SESSION['admin']){
                        
                        if(isset($_POST['search_user'])){
                            
                            $search_line = $_POST['search_line'];                       
                            $sel = "SELECT * FROM registration WHERE user_login = '$search_line'";
                            
                            if($result = $connect->query($sel)){
                                
                                
                                foreach($result as $row){
                                    $name = $row['user_login'];
                                    $email = $row['user_email'];
                                }//конец foreach
                                if($search_line == $name  && $search_line != "" ){
                                    
                                    echo '
                                        
                                        <table class="a-panel_users_table">
                                            <tr>
                                                <th>Логин
                                                    
                                                </th>
                                                <th>E-mail 
                                                    
                                                </th>
                                                <th>Дата регистрации
                                                    
                                                </th>
                                                <th>Действия
                        
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>'.$row['user_login'].'</td>
                                                <td>'.$row['user_email'].'</td>
                                                <td>'.$row['data_registration'].'</td>
                                                <td class="setting">
                                                    <form action="" method="post">
                                                        <input type="hidden" value="'.$delete.'">
                                                        <input type="submit" name="delete-user" value="удалить">
                                                    </form>
                                                    <form action="" method="post">
                                                        <input type="hidden" value="'.$lock.'">
                                                        <input type="submit" name="blocking-user" value="Заблокировать">
                                                    </form>
                                                    <form action="" method="post">
                                                        <input type="hidden" value="'.$row['id'].'">
                                                        <input type="submit" name="reblocking-user" value="Разблокировать">
                                                    </form>
                                                    <form action="" method="post">
                                                        <input type="hidden" value="'.$row['id'].'">
                                                        <input type="submit" name="reestablishPass-user" value="Востановть пароль">
                                                    </form>
                                                </td>
                                            </tr>                              
                                        </table>
    
                                    ';
                                }else if($search_line != $name){
                                    echo "Пользователь не найден";
                                }else if($search_line == ""){
                                    echo "Поисковая строка пустая";
                                }
                                
                                
                                

                            }//конец if по выборке из таблицы
                            else{
                                echo $result = $connect->error;
                            }//конец else по выборке из таблицы

                        }          
                    }
                    
                    
                    
                    
                    echo'
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
                        </tr>';
                            if($_SESSION['admin']){
                                $sel = "SELECT * FROM registration";
                                if($result = $connect->query($sel)){
                                    
                                    foreach($result as $row){
                                        $delete = $row['id'];
                                        $lock = $row['id'];
                                        echo '
                                        <tr>
                                            <td>'.$row['user_login'].'</td>
                                            <td>'.$row['user_email'].'</td>
                                            <td>'.$row['data_registration'].'</td>
                                            <td class="setting">
                                                <form action="" method="post">
                                                    <input type="hidden" value="'.$delete.'">
                                                    <input type="submit" name="delete-user" value="удалить">
                                                </form>
                                                <form action="" method="post">
                                                    <input type="hidden" value="'.$lock.'">
                                                    <input type="submit" name="blocking-user" value="Заблокировать">
                                                </form>
                                                <form action="" method="post">
                                                    <input type="hidden" value="'.$row['id'].'">
                                                    <input type="submit" name="reblocking-user" value="Разблокировать">
                                                </form>
                                                <form action="" method="post">
                                                    <input type="hidden" value="'.$row['id'].'">
                                                    <input type="submit" name="reestablishPass-user" value="Востановть пароль">
                                                </form>
                                            </td>
                                        </tr>
                                        ';
                                    } //конец foreach


                                    if(isset($_POST['delete-user'])){
                                        $del = "DELETE FROM registration WHERE id = '$delete'";
                                        if($result = $connect->query($del)){
                                            echo "Пользователь удален";
                                        }else{
                                            $result = $connect->error;
                                        }
                                    }
                                    if(isset($_POST['blocking-user'])){
                                        $bl = "UPDATE * FROM registration WHERE id = '$lock'";
                                        if($result = $connect->query($bl)){
                                            echo "Пользователь заблочен";
                                        }else{
                                            $result = $connect->error;
                                        }
                                    }
                                }
                                else{
                                    echo $result = $connect->error;
                                }
                            }
                        
                        
                        echo '
                        
                    </table>
                </div>
            </section>   
                
            
            
        </section>
    </div>
    
    
    ';




?>