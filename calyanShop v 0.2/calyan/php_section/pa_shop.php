<?php

echo '
<section class="shop-pa">
    <div>
        <h3>Управление магазином</h3>
    </div>
    
    <form class="download-shop" method = "post" action = "../php_handler/dw_pa_shop.php" enctype="multipart/form-data"> 
        <div>
            <label for="name">Название</label>
            <input type="text" name="name" id="name" autocomplete="off">
        </div>
        <div>
            <label for="descript">Описание товара</label>
            <textarea name="descript" id="descript" cols="30" rows="10" autocomplete="off"></textarea>
        </div>
        <div>
            <label for="weight">Указать вес товара</label>
            <input type="number" name="weight" id="weight" autocomplete="off" min ="0">
        </div>
        <div>
            <span>Указать крепкость</span>
            <div>
                <label for="hard">Тяжелый</label>
                <input type="radio" name="hard" id="hard" value = "hard">
            </div>
            <div>
                <label for="middle">Средний</label>
                <input type="radio" name="hard" id="middle" value = "middle">
            </div>
            <div>
                <label for="easy">Легкий</label>
                <input type="radio" name="hard" id="easy" value = "easy">
            </div>
        </div>
        <div>
            <label for="price">Задать цену товара</label>
            <input type="number" name="price" id="price" autocomplete="off" min ="0">
        </div>
        <div>
            <label for="image">Загрузить фотографию товара</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <input type="submit" value="Загрузить" name = "download-shop">
        </div>
    </form>
</section>
';
$select_shop = "SELECT * FROM shop";
if($result = mysqli_query($connect, $select_shop)){
    foreach($result as $row){
        echo '
        
        <section>
            <form action="../php_handler/delete_goods_shop.php" method="post">
                <span>'.$row['name_tobaco'].'</span>
                <span>'.$row['descr_tobaco'].'</span>
                <span>'.$row['weight_tobaco'].'</span>
                <span>'.$row['price_tobaco'].'</span>
                <div>
                    <input type ="hidden" name="delete" value="'.$row['id'].'">
                    <input type="submit" value="Удалить товар" name="delete_shop_goods">
                </div>
            </form>
        </section>
        
        
        ';
    }
}



?>