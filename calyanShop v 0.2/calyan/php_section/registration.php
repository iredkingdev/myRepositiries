<?php


echo '

<section class="registration">
            <div class="registration_container">
                <section class="reg-head">
                    <h2>Панель регистрации</h2>
                    <p>
                        Авторизуйтесь, что бы использовать возможность оставлять комментарии и оценивать фотографии галлереи.
                    </p>
                </section>
                <div class="reg-block">
                
                   
                        <section class="reg-block_registration">
                            <div>
                                <h3>Регистрационная форма</h3>
                            </div>
                            <form action="../php_handler/registration_new_user.php" method="POST" class="rigistration-form">
                                <div>
                                    <label for=""></label>
                                    <input type="text"  placeholder="Придумайте логин" value="" name="your-login">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="text" placeholder="Ваше имя" value="" name="your-name">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="text" placeholder="Ваша фамилия" value="" name="your-sername">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="text" placeholder="Ваше отчество" value="" name="your-patronymic">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="date" placeholder="Ваш возраст" value="" name="your-age">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="text" placeholder="Ваш город" value="" name="your-city">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="text" placeholder="Придумайте пароль" value="" name="your-pass">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="text" placeholder="Продублируете пароль" value="" name="your-pass-repite">
                                </div>
                                <div>
                                    <label for="registration">Зарегистрироваться</label>
                                    <input type="submit" name="registration" id="registration">
                                </div>
                            </form>
                        </section>';
                        
                            
                        echo '
                        <section class="reg-block_enterance">
                            <div>
                                <h3>Форма авторизации</h3>
                            </div>
                            <form action="../php_handler/autorisation.php" method="post" class="rigistration-form">
                                <div>
                                    <label for=""></label>
                                    <input type="text" name="my-login" placeholder="Ваш логин">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="password" name="my-password" placeholder="Ваш шароль">
                                </div>
                                <div>
                                    <label for="autoris">Войти</label>
                                    <input type="submit" name="autoris" id="autoris">
                                </div>
                            </form>
                        </section>
                    
                    
                    
                    
                </div>
            </div>
        </section>



';




?>