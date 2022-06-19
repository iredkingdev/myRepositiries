<?php
    require 'php_handler/db.php';
/**********************************Настройки сессии********************* */
    session_start();
    
    $select_registration = "SELECT * FROM registration";
    if($result = $connect_admin->query($select_registration)){
        foreach($result as $admin){
            //$admin['user_login']
        }
    }else{
        echo $result = $connect_admin->error;
    }

    if($_SESSION['admin'] != $admin['user_login']){
        header('location: index.php?page=admin_enter');
    }else if($_SESSION['admin'] == $admin['user_login']){
        $message = $_SESSION['admin'] . ' <a href="php_handler/handler_exit_admin.php">Выйти</a>';
    }

/**********Функция дейтсвия***********/
    class Actions{//создал класс
        public $block, $class_warning;
        function action($blockUnblock, $e){
            if($blockUnblock == $e){
               $this->block = 'Разблокировать';
            }else{
                $this->block = 'Заблокировать';
            }   
        }
    }; 

    $action = new Actions(); //экземпляр класса или объект класса
/***************Поиск ****************/
    $search_line = $_POST['search_line'];
    
    if(isset($_POST['search_user'])){
        $sel = "SELECT * FROM registration WHERE user_login LIKE '%$search_line%' OR user_email LIKE '%$search_line%'";
            if($result = $connect->query($sel)){   //начало запроса sql
                foreach($result as $row){ //Вывод информации путем перебора таблицы
                        //
                }
                
            }else{//конец запроса sql
                echo $result = $connect->error; 
            }

        if($search_line != "" && $search_line === $row['user_login'] || $search_line === $row['user_email']){
            $show_number = mysqli_num_rows($result);
            $result_number_search = "По вашему запросу найдено $show_number совпадение";
            $action->action($row['lock_user'], 1);
            $result_search =   '
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
                        <td '.$action->class_warning.'>'.$row['user_login'].'</td>
                        <td '.$action->class_warning.'>'.$row['user_email'].'</td>
                        <td '.$action->class_warning.'>'.$row['data_registration'].'</td>
                        <td class="setting">
                        <form action="php_handler/handler_delete_user.php" method="post">
                            <input type="hidden" name="delete-user-id" value="'.$row['id'].'">
                            <input type="submit" name="delete-user-send" value="удалить">
                            <input type="hidden" name="lock-user-id" value="'.$row['id'].'">
                            <input type="submit" name="lock-user-send" value ="'.$action->block.'">
                        </form>
                        </td>
                    </tr>
    
                </table>
                
            
            ';
            
        }else if($search_line == ""){
            $err_mess = "Поиск пуст";
            header('refresh: 2, url = index.php?page=administrator');
        }
        else if($search_line !== $row['user_login']){
            $err_mess = "Пользователя ".$search_line." не существует";
            header('refresh: 2, url = index.php?page=administrator');
        }
        else if($search_line !== $row['user_email']){
            $err_mess = "Такого email нет";
            header('refresh: 2, url = index.php?page=administrator');
        }
    }
/**********Обновить***********/
    if(isset($_POST['refresh_search'])){
        
        header('location: index.php?page=administrator');
        exit; 
    }

    
    
    
    echo '
    <div class="con-hd height-con">
        <section class="administrator">
            <h3>Вы вошли как администратор: '.$message.'
                
            </h3>
            <section class="administrator_visual">
                <div class="a-panel">
                    <span class="active-a-panel value_panel">
                        Пользователи
                    </span>
                    <span class="value_panel">
                        Добавить контент
                    </span>
                    <span class="value_panel">
                        История заказов
                    </span>
                </div>
            

                <section class="window-a">
                    <div class="a-panel_users block_toggle_admin">
                    
                        <form  method="post">
                            <input type="search" name="search_line" id="" placeholder="Поиск пользователя">
                            <input type="submit" value="Поиск" name="search_user">
                        </form>
                        <form  method="post">
                            <input type="submit" value="Сбросить" name="refresh_search">
                        </form>
                        ';

                    
                        echo $result_search . $result_number_search . $err_mess;

                        echo '
                        <table class="a-panel_users_table">
                            <tr>
                                <th>ID
                                    <span class="icon-sort-amount-desc"></span>
                                </th>
                                <th>Логин
                                    <span>A-я</span>
                                </th>
                                <th>E-mail
                                    <span>A-я</span>
                                </th>
                                <th>Дата регистрации
                                    <span>A-я</span>
                                </th>
                                <th>Блокировка
                                    <span>A-я</span>
                                </th>
                                <th>Действия
                                    
                                </th>
                            </tr>';
                                // 
                                    $sel = "SELECT * FROM registration";
                                    if($result = $connect->query($sel)){
                                        //echo $result->num_rows;
                                        foreach($result as $row){
                                            $action->action($row['lock_user'], 1);
                                            
                                            //сюда вставить функцию
                                            echo '
                                            <tr>
                                                <td >'.$row['id'].'</td>
                                                <td >'.$row['user_login'].'</td>
                                                <td >'.$row['user_email'].'</td>
                                                <td >'.$row['data_registration'].'</td>
                                                <td >'.$row['lock_user'].'</td>
                                                
                                                <td class="setting">
                                                    <form action="php_handler/handler_delete_user.php" method="post">
                                                        <input type="hidden" name="delete-user-id" value="'.$row['id'].'">
                                                        <input type="submit" name="delete-user-send" value="удалить"> 
                                                        <input type="hidden" name="lock-user-id" value="'.$row['id'].'">
                                                        <input type="submit" name="lock-user-send" value ="'.$action->block.'">
                                                    </form>
                                                </td>
                                            </tr>
                                            ';
                                        } 

                                    }else{
                                        echo $result = $connect->error;
                                    }
                                
                            
                            
                            echo '
                            
                        </table>

                    </div>

                    <div class="a-add-content block_toggle_admin">
                        <div class="search-content">
                            <form action="php_handler/actionSearchContent.php" method="post">
                                <input type="search" name="searchContentLine" id="" placeholder="Поиск записи">
                                <input type="submit" name="searchConten" value="Поиск записи">
                            </form>
                            <form action="php_handler/actionSearchContent.php" method="post">
                                <input type="submit" name="refreshSearchContent" value="Сброс">
                            </form>
                        </div>

                        
                        <div class="add-content">
                            <form action="php_handler/actionSearchContent.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="namePost" placeholder="Введите название">
                                <textarea name="descriptPost" id="" cols="30" rows="10" placeholder="Введите описание"></textarea>
                                <input type="file" name="imagePost">
                                <input type="submit" name="addPost" value="Добавить запись">
                            </form>
                        </div>

                        <div class="brow-content">
                            <div class="content">
                                <div>
                                    <span>№ записи: </span>
                                    <span>Дата публикации: </span>
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </section>
                
            </section>        
        </section>

        
    </div>
    
    
    ';




?>