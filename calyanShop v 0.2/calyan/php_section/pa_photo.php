<?php
echo '

<div class="download-image">
    <section class="download-image_download">
        <div>
            <h3>Управление галлереей</h3>
        </div>
        <form class="download-photo" method = "post" action = "../php_handler/dw_pa_photo.php" enctype="multipart/form-data"> 
            <div>
                <label for="dl-image">Загрузить фотографию</label>
                <input type="file" name="image" id="dl-image">
            </div>
            <div>
                <input type="submit" value="Загрузить" name = "download-photo">
            </div>
        </form>
    </section>
    <section class="download-image_delete">
        <div>
            <h3>История</h3>
        </div>
    ';
        
        $sel_photo = "SELECT * FROM photo";
        if($result = mysqli_query($connect, $sel_photo)){
            foreach($result as $row){
                $id = $row["id"];
                $date = $row["get_date"];
                $src = $row["src_photo"];
                echo '
                <div class="info-delete-photo">
                    <div>
                        <span></span>
                        <span>'.$date.'</span>
                        <span>Номер фотографии: '.$id.' </span>
                    </div>
                    <form class="delete-photo" action="../php_handler/delete_photo.php" method="post">
                        <input type="hidden" name="delete-image" value="'.$id.'">
                        <input type="submit" name="image" id="image" value="Удалить фотографию">
                    </form>
                </div>
                ';
            }
        }    
        echo '
    </section>
</div> 
';

?>