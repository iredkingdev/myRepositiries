<?php

echo '
<section class="shop">
        <div class="shop_container">
            <section class="shop-search">
                <form action="../index.php?page=search_shop" method="post" class="search">
                    <input type="search" name="search_line" class="search_line" placeholder="Поиск товара по названию" autocomplete="off">
                    <input type="submit" value="Поиск" class="search_submit" name="search">
                </form>
            </section>
            <section class="shop-goods">
            ';
            if(isset($_POST['search'])){
                
                $search1 = $_POST['search_line'];
                $search = "SELECT * FROM shop WHERE name_tobaco LIKE '%$search1%'";
                
                if($res = mysqli_query($connect, $search)){
                    
                    foreach($res as $r){
                        echo '
                            <form action="../php_handler/add_to_busket.php" method="post" class="shop-cart">
                            <div class="cart-img">
                                <img src="'.$r['src_tobaco'].'" alt="tabaco">
                                <div class="cart-add">
                                    <input type="submit" value="В корзину" name="add_busket">
                                </div>
                            </div>
                            <div class="cart-name">
                                <input type="hidden" name="name" value="'.$r['name_tobaco'].'">
                                <span>'.$r['name_tobaco'].'</span>
                            </div>
                            <div class="cart-des">
                                <input type="hidden" name="description" value="'.$r['descr_tobaco'].'">
                                <span>'.$r['descr_tobaco'].'</span>
                            </div>
                            <div class="cart-price">
                                <input type="hidden" name="price" value="'.$r['price_tobaco'].'">
                                <span>Цена: '.$r['price_tobaco'].' рублей</span>
                            </div>
                            <div class="cart-price">
                                <input type="hidden" name="weight" value="'.$r['weight_tobaco'].'">
                                <span>Вес табака: '.$r['weight_tobaco'].' гр.</span>
                            </div>
                            <div class="cart-price">
                                <input type="hidden" name="hard" value="'.$r['hard_tobaco'].'">
                                <span>Крепкость табака: '.$r['hard_tobaco'].'</span>
                            </div>
                        </form>   
                        ';
                        }
                    }
                }
                
            
            
                
            
             echo '      
            </section>
        </div>
    </section>


';


?>