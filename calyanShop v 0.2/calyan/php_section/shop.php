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
                


                $select_table_shop = "SELECT * FROM shop";
                if($result = mysqli_query($connect, $select_table_shop)){
                    foreach($result as $row){
                        echo '
                            <form action="../php_handler/add_to_busket.php" method="post" class="shop-cart">
                            <div class="cart-img">
                                <img src="'.$row['src_tobaco'].'" alt="tabaco">
                                <div class="cart-add">
                                    <input type="submit" value="В корзину" name="add_busket">
                                </div>
                            </div>
                            <div class="cart-name">
                                <input type="hidden" name="name" value="'.$row['name_tobaco'].'">
                                <span>'.$row['name_tobaco'].'</span>
                            </div>
                            <div class="cart-des">
                                <input type="hidden" name="description" value="'.$row['descr_tobaco'].'">
                                <span>'.$row['descr_tobaco'].'</span>
                            </div>
                            <div class="cart-price">
                                <input type="hidden" name="price" value="'.$row['price_tobaco'].'">
                                <span>Цена: '.$row['price_tobaco'].' рублей</span>
                            </div>
                            <div class="cart-price">
                                <input type="hidden" name="weight" value="'.$row['weight_tobaco'].'">
                                <span>Вес табака: '.$row['weight_tobaco'].' гр.</span>
                            </div>
                            <div class="cart-price">
                                <input type="hidden" name="hard" value="'.$row['hard_tobaco'].'">
                                <span>Крепкость табака: '.$row['hard_tobaco'].'</span>
                            </div>
                        </form>   
                        ';
                    }
                }
                 echo '      
                </section>
            </div>
        </section>
    
    
    ';


?>