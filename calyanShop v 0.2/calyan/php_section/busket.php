<?php

echo '
<section class="busket">
    <div class="busket_container">
        <section class="busket_row">
        
            <div>
                <h3>Товары в корзине</h3>
            </div>
            ';
            $select_busket = "SELECT * FROM busket";
            if($result = mysqli_query($connect, $select_busket)){
                foreach($result as $row){
                    echo '
                    <form class="busket-cart" action="../php_handler/delete_goods_busket.php" method="POST">
                        <div class="cart-name">
                            
                            <span>'.$row['name_busket'].'</span>
                        </div>
                        <div class="cart-des">
                            
                            <span>'.$row['descr_busket'].'</span>
                        </div>
                        <div class="cart-price">
                            
                            <span>Цена: '.$row['price_busket'].' рублей</span>
                        </div>
                        <div class="cart-price">
                            
                            <span>Вес табака: '.$row['weight_busket'].' гр.</span>
                        </div>
                        <div class="cart-price">
                            
                            <span>Крепкость табака: '.$row['hard_busket'].'</span>
                        </div>
                        <div>
                            <input type="hidden" name="delete_goods_busket" value="'.$row['id'].'">
                            <input type="submit" value="X" class = "icon-bubble">
                        </div>
                    </form>
                    ';
                }
            }
        echo '    
        </section>

        <section class = "busket_price">
        ';
        $select_price = "SELECT * FROM busket";
        if($result = mysqli_query($connect, $select_price)){
            $total_price = '0';
            
            foreach($result as $row){
                $sub_price = $row['price_busket'];
                if(isset($sub_price)){
                    $total_price += $sub_price;
                }else if(isset($sub_price) == false){
                    $total_price = 0;
                }
            } 
            
            echo '
            
            <div class = "busket-price">
                <input type="hidden" value="'.$total_price.'">
                <span>Сумма заказа: '.$total_price.'  рублей</span>
            </div>
            ';
        }
            
            echo '
            
            <div class = "busket-feedback">
                <h4>Перед заказом заполните ваши данные</h4>
            </div>

            <form action="" method="post">
                <input type="text" placeholder="Ваше имя">
                <input type="text" placeholder="Ваш телефон">
                <input type="text" placeholder="Ваш адрес">
                <input type="submit" value="ЗАКАЗТЬ">
            </form>
        </section>

    </div>
</section>
';



?>