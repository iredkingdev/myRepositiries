<?php
    echo '
    <div class="download-image">
                            <section class="download-image_download">
                                <div>
                                    <h3>Управление блогом</h3>
                                </div>
                                <form class="download-blog">
                                    <div>
                                        <label for="head-blog">Заголовок блога</label>
                                        <input type="text" name="head-blog" id="head-blog" placeholder="Введите заголовок">
                                    </div>
                                    <div>
                                        <label for="descr-blog">Описание блога</label>
                                        <textarea name="descr-blog" id="descr-blog" cols="30" rows="10" placeholder="Введите Описание"></textarea>
                                    </div>
                                    <div>
                                        <label for="dl-image">Загрузить фотографию</label>
                                        <input type="file" name="image" id="dl-image" >
                                    </div>
                                    <div>
                                        <input type="submit" value="Загрузить">
                                    </div>
                                </form>
                            </section>
                            <section class="download-image_delete">
                                <div>
                                    <h3>История</h3>
                                </div>
                                <div class="info-delete-photo">
                                    <div>
                                        <span>11.04.2021</span>
                                        <span>№</span>
                                        <span>Заголовок</span>
                                    </div>
                                    <form class="delete-photo">
                                        <input type="hidden" name="delete-image" value="">
                                        <input type="submit" name="image" id="image" value="Удалить блог">
                                    </form>
                                </div>
                            </section>
                        </div>    
    
    
    
    
    ';



?>