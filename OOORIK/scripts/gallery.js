let get_div_class_show_big_image = document.querySelector('.show-big-image');
        let get_article_click_article = document.querySelectorAll('.click_article'); 
        
        for(let i = 0; i < get_article_click_article.length; i++){
            get_article_click_article[i].addEventListener('click', function(){
               get_childNodes = this.childNodes[3];
               //console.log(get_childNodes); получаем путь к img
               //event = e.target; span
               //console.log(event); span
               styleBlocks();
               
               settAttributeForImg(get_childNodes.getAttribute('src')); //this это артикл
            })
        }
        //Прпописать стили для блоков, такие как hidden и прочее
        function styleBlocks(){
            createClose();
            active_hidden_body = document.body;
            active_hidden_body.classList.toggle('no-scroll');
            get_div_class_show_big_image.classList.toggle('show-big-image-active');
        }
        //Создать кнопку закрытия блока
        function createClose(){
            crete_elem_button = document.createElement('button');
            crete_elem_button.setAttribute('class', 'icon-close');
            get_div_class_show_big_image.append(crete_elem_button);
            crete_elem_button.addEventListener('click', function(){
                get_div_class_show_big_image.classList.toggle('show-big-image-active');
                active_hidden_body.classList.toggle('no-scroll');
                get_div_class_show_big_image.innerHTML = "";
            });
        }
        //Прописать путь для картинки
        function settAttributeForImg(attr){
            create_elem = document.createElement('img');
            create_elem.setAttribute('src', attr);
            get_div_class_show_big_image.append(create_elem);
        }
        