
<?php  

    
   echo '
            <div class="content">
            <section class="container_one_index">
                <div>
                    <h2>Наша галлерея</h2>
                    <p>
                        Окунись в безмятежность и получи кайф для своих глаз. Только лучшее от наших фотографоф. 
                    </p>
                </div>
                <section class = "content_photo"> 
                
                ';
                ?>
                    <?php
                        $sel_photo = "SELECT * FROM photo";
                        if($result = mysqli_query($connect, $sel_photo)){
                            
                            foreach($result as $row){
                                $id = $row["id"];
                                $date = $row["get_date"];
                                $src = $row["src_photo"];
                                $like = $row["like_photo"];
                                $dlike = $row["deslike_photo"];
                        
                                echo '
                                    <article class = "article-photo">
                                        <div class = "content_photo-image">
                                            <img src="'.$src.'" alt="photo">
                                        </div>
                                        <div class = "content_photo-info">
                                            <div class = "content_photo-date">
                                                <span>#'.$id.'</span>
                                                <span>'.$date.'</span>
                                            </div>
                                            <section class = "content_photo-favor">
                                                <form class = "content_photo-favor-like" method = "POST" action="../php_handler/add_like.php">
                                                    <input type="hidden" value="'.$row["id"].'" name="add_like_id">
                                                    <input type="hidden" value="'.$row["like_photo"].'" name="count_like">
                                                    <button class="icon-heart" name="add_like" ></button>
                                                                                   
                                                    <span>'.$like.'</span> 
                                                </form>

                                                <form class = "content_photo-favor-dlike" method = "POST" action="../php_handler/add_dlike.php">
                                                    <input type="hidden" value="'.$row["id"].'" name="add_dlike_id">
                                                    <input type="hidden" value="'.$row["deslike_photo"].'" name="count_dlike">
                                                    <button class="icon-heart-broken" name="add_dlike" ></button>
                                                                                
                                                    <span>'.$dlike.'</span>
                                                </form>
                                            </section>
                                        </div>
                                    </article>
                                ';
                            }
                        }
                    ?> 
                        
                  <?php  
                  echo '
                  </section>
            </section> 
        </div>
                  ';    
                
        ?>      
                        


