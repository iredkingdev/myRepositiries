<?php
session_start();
    if(isset($_POST['buy_now'])){
        if($_SESSION['login']){
            $message = "Спасибо за покупку";
            echo $message;
            header('refresh: 2, url = ../index.php?page=main');
        }
        else if(!$_SESSION['login']){
            $message = "Зарегистрируйтесь, что бы совершать покупки";
            echo $message;
            header('refresh: 2, url = ../index.php?page=enter');
        }
    }

    if(isset($_POST['send-coment'])){
        if($_SESSION['login']){
            $message = "Спасибо за ваш комментарий";
            echo $message;
            header('refresh: 2, url = ../index.php?page=main');
        }
        else if(!$_SESSION['login']){
            $message = "Зарегистрируйтесь, что бы оставлять комментарии";
            echo $message;
            header('refresh: 2, url = ../index.php?page=enter');
        }
    }
    echo '
        <div class="con-default">
            <div class="content">

                <section class="con_head">
                    <div>
                        <img src="img/logo.png" alt="logo">
                    </div>
                    <h2>welcome ';
                    if($_SESSION['login']){
                        echo '<span>' . $_SESSION['login'] .  '<a href="php_handler/exit.php">Выход</a></span>';
                    }else{
                        echo "to visit us";
                    }
                    echo '</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Corporis ex, iusto reiciendis illo magnam illum fugiat 
                        error molestias, in nesciunt qui impedit inventore harum, 
                        voluptatem voluptatum nisi a aliquam. Non.
                    </p>
                </section>

                <section class="con_products">
                    <div class="products_description">                           
                        <h3>description</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, eaque.</p>
                    </div>
                    <div class="products_cart">';
                    $i = 0;
                    while($i < 3){
                        echo '
                            <article class="cart">
                                <div class="cart_visual">
                                    <img src="img/gr.png" alt="gr">
                                    <form method = "POST">
                                        <input type="submit" value="buy now" name = "buy_now">
                                    </form>
                                </div>
                                <div class="cart_description">
                                    <h4>Product Name</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur 
                                        adipisicing elit. Fugit, eligendi!
                                    </p>
                                    <span>45.99$</span>
                                </div>
                            </article>
                        ';
                        $i++;
                    }
                        
                      echo '  
                    </div>
                </section>

                <section class="con_wall">

                    <div class="fast">
                        <div class="fast_image">
                            <img src="img/com.jpg" alt="image">
                        </div>

                        <div class="fast_sub-image">

                            <form action="" method="post" class="fast_sub-image_send-coment">
                                <textarea name="" id="" cols="" rows="" placeholder="Оставить коментарий"></textarea>
                                <div>
                                    <input type="submit" value="Отправить" name="send-coment">
                                </div>   
                            </form>

                            <div class="fast_sub-image_coment">
                                <details class="">
                                    <summary class="">Просмотреть комментарии к записи</summary>

                                    <article class="sub-image_coment-block">
                                        <div class="sub-image_coment-block_info">
                                            <sapn>'.$_SESSION['login'].'</sapn>
                                            <sapn>10:12</sapn>
                                        </div>
                                        <div class="sub-image_coment-block_text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Adipisci nobis, unde laudantium eum tenetur id et accusantium 
                                                quod minima, consectetur voluptatum at voluptate recusandae 
                                                repellat corporis possimus earum rerum iste!
                                            </p>
                                        </div>
                                    </article>

                                </details>
                            </div>
                        </div>
                    </div>


                </section>
            </div>
        </div>
    ';



?>