
<?php  


    /*$sel_photo = "SELECT * FROM photo";
    if($result = mysqli_query($connect, $sel_photo)){
        foreach($result as $row){
            $id = $row["id"];
            $date = $row["get_date"];
            $src = $row["src_photo"];
            $photo =  '
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
                                    <form class = "content_photo-favor-like">
                                        <input type = "hidden" value = "">
                                        <button class="icon-heart" value = "1" name = "like"></button>
                                        <span>3</span>
                                    </form>
                                    <form class = "content_photo-favor-dlike">
                                        <input type = "hidden" value = "">
                                        <button class="icon-heart-broken" name = "dlike"></button>
                                        <span>1</span>
                                    </form>
                                </section>
                            </div>
                        </article>
                        echo $photo;
            ';
        }
    }*/
    
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
                                                <form class = "content_photo-favor-like">
                                                    <input type = "hidden" value = "">
                                                    <button class="icon-heart" value = "1" name = "like"></button>
                                                    <span>3</span>
                                                </form>
                                                <form class = "content_photo-favor-dlike">
                                                    <input type = "hidden" value = "">
                                                    <button class="icon-heart-broken" name = "dlike"></button>
                                                    <span>1</span>
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
                        


