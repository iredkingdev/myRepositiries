<?php 
    require_once 'db/db.php';
    
    echo '
        <div class="id">
            <section class="admin_enter">
                <div class="container">
                    <section class="enter">
                        <div>';
                            
                                if(!isset($_SESSION['login'])){ 
                                    echo '
                                    <h3>Вход</h3>
                                    <form action="php_handler/enter_to_ap.php" method="post" class="form-enter"> 
                                        <input type="text" placeholder="Login" name="login">
                                        <input type="text" placeholder="Password" name="pass">
                                        <input type="submit" name="submit_to_panel" value="Войти">
                                    </form>
                                    ';
                                }else{
////php_handler/download_photo.php
                                        echo '
                                            <div>
                                                <h2>Добро пожаловать: '.$_SESSION['login'].'</h2>
                                            </div>
                                            <div class="head-download">
                                                <a href="php_handler/exit_to_admin.php">Выйти из панели администратора</a>
                                                <h3>Загрузить фото</h3>
                                            </div>
                                            <form action="php_handler/download_photo.php" method="post" enctype="multipart/form-data" class="form-download">

                                                <div class="form-download_name">
                                                    <span>Введите название:</span>
                                                    <input type="text" name="name_image">
                                                </div>
                                                
                                                <div class="form-download_value-img">
                                                    <label for="download_image">Выбрать фотографию</label>
                                                    <input type="file" id="download_image" name="value_image" class="value_image">
                                                    <span class="info">'.$mes.'Файл не выбран</span>
                                                </div>
                                                <div class="form-download_submit">
                                                    <input type="submit" value="Загрузить файл" name="download_image" class="download_image">
                                                </div>                                                
                                            </form>
                                            <section class="history">
                                        ';
                                            $sel = "SELECT * FROM photo";
                                            if($result = mysqli_query($connect, $sel)){
                                                foreach($result as $row){
                                                    echo '
                                                        <div class="history_block">
                                                            <div class="history_block_col-one">
                                                                <span>ID фото: '.$row['id'].' </span>
                                                                <div>
                                                                    <img src="'.$row['src_photo'].'" alt="'.$row['id'].'">      
                                                                </div>                                                           
                                                            </div>
                                                            <div class="history_block_col-two">
                                                                <span>Название: </span>
                                                                <span>'.$row['name_photo'].'</span>
                                                            </div>
                                                            <form action="php_handler/delete_photo.php" method="post" class="history_block_delete">
                                                                <input type="hidden" name="delet_photo" value="'.$row['id'].'">
                                                                <input type="submit" value="Удалить фотографию" name="delet_photo_submit">
                                                            </form>                                                                                                                                                                                        
                                                        </div>
                                                    ';
                                                }
                                            }  
                                        echo '
                                        </section>
                                        ';
                                    }
                            echo '
                        </div>
                    </section>
                </div>
            </section>
        </div>   
    ';




?>