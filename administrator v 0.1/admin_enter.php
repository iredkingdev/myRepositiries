<?php

echo '
    
    <div class="con-default">
        <div class="autorisation content">
            <div class="products_description">
                <h2>Lorem, ipsum dolor.</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, nisi.</p>
            </div>
            <section class="autor-col">
                <section class="sec-reg">
                    
                        <h3>Регистрация администратора</h3>
                        <form action="php_handler/reg_admin.php" method="post">
                            <input type="text" placeholder="Придумайте логин" name="generate-login">
                            <input type="mail" placeholder="Ваш e-mail" name="generate-email">
                            <input type="text" placeholder="Придумайте пароль" name="generate-pass">
                            <input type="text" placeholder="Повторите пароль" name="generate-repeat-pass">
                            <input type="submit" value="Зарегистрироваться" name="user-registration">
                        </form>
                    
                </section>
                <section class="sec-autor">
                    
                        <h3>Авторизация администратора</h3>
                        <form action="php_handler/reg_admin.php" method="post">
                            <input type="text" placeholder="Ваш логин" name="input-user-login">
                            <input type="text" placeholder="Ваш пароль" name="input-user-pass">
                            <input type="submit" value="Авторизоваться" name="user-autorisation">
                            <input type="submit" value="Востановить пароль" name="user-restore-password">
                        </form>
                    
                </section>
            </section>
        </div>
    </div>
';


?>