<?php 
//require  'layot/head.php';
?>
    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            <h1><?php
            $params['tittle']?></h1>
        </div>
        <div class="inner order-1 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="h2 pb-2 font-weight--bold">Офисы Ingate</div>
                        <p class="font-color--gray my-4">Мы работаем по будням, с 9:00 до 19:30</p>
                        <div class="map-panel my-5">
                            <div class="i-tabs" itemscope="" itemtype="http://schema.org/Organisation">
                                <span class="d-none" itemprop="name">Ingate</span>
                                <div class="i-tabs-nav flex">
                                    <div class="i-tab-nav">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" class="svg-icon">
                                            <use xlink:href="#address"></use>
                                        </svg>
                                        <a data-map="moscow" itemprop="addressLocality" class="city collapsed" href="#map-city-moscow" data-toggle="collapse" data-target="#map-city-moscow" aria-expanded="false" aria-controls="moscow">Москва</a>,
                                        <span itemprop="streetAddress">Каширское ш., 3, корп. 2, стр. 4, оф. 53</span>,
                                        <a href="tel:+74951510683" class="comagic_phone">+7 (495) 151-06-83</a>
                                    </div>
                                    <div class="i-tab-nav">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" class="svg-icon">
                                            <use xlink:href="#address"></use>
                                        </svg>
                                        <a data-map="spb" itemprop="addrecLocality" class="city" href="#map-city-spb" data-toggle="collapse" data-target="#map-city-spb" aria-expanded="false" aria-controls="spb">Санкт-Петербург</a>,
                                        <span itemprop="streetAddress">ул. Марата, д. 49</span>,
                                        <a href="tel:+78124160927"><span itemprop="telephone">+7 (812) 416 09 27</span></a>
                                    </div>
                                    <div class="i-tab-nav active">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" class="svg-icon">
                                            <use xlink:href="#address"></use>
                                        </svg>
                                        <a data-map="tula" itemprop="addressLocality" class="city" href="#map-city-tula" data-toggle="collapse" data-target="#map-city-tula" aria-expanded="true" aria-controls="tula">Тула</a>,
                                        <span itemprop="streetAddress">ул. Пушкинская, 27</span>,
                                        <a href="tel:+74872250221"><span itemprop="telephone">+7 (4872) 25 02 21</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?if (!$params['result']){?>
        <h2>Свяжитесь с нами</h2>
        <form class="form-horizontal" method="post" action="handler_php/feedback.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Phone:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="pwd" placeholder="Your phone" name="pwd">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Agree</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" name="submit" value="submit">
                </div>
            </div>
        </form>

        <?
        } else {?>
            <p>С вами свяжуться в ближайщее время</p>
        <?}?>
    </div>
    <?php 
    //require  'layot/footer.php';
    ?>
