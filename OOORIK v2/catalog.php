<?php
require_once 'db/db.php';


echo '
<div class="id">
    <section class="section-gallery">
        
        <div class="container">
            <section class="gallery-head">
                <div>
                    <h2>Галлерея изделий</h2>
                </div>
            </section>
            <section class="galleey-big-image"></section>
            <section class="gallery-image">';
                /*$open_dir = opendir('img/gallery');
                $count = 0;
                while($readdir = readdir($open_dir)){
                    if($readdir == '.' || $readdir == '..' || is_dir('img/gallery' . $readdir)){
                        continue;
                    }
                    $count++;
                    echo'
                        <article class="click_article">
                            <span class="1">Просмотр</span>
                            <img src="img/gallery/1 ('.$count.').jpg"  alt="" class="image">
                        </article>
                    ';
                }*/
                $sel = "SELECT*FROM photo";
                if($result = mysqli_query($connect, $sel)){
                    foreach($result as $row){
                        echo '
                        <article class="click_article">
                            <span class="1">Просмотр</span>
                            <img src="'.$row['src_photo'].'"  alt="'.$row['id'].'" class="image">
                        </article>
                        ';
                    }
                }
                
                echo '
            </section>
        </div>
    </section>
</div>     
';


?>