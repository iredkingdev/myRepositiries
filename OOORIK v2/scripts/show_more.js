let btnShow = document.querySelector('.button');
        btnShow.addEventListener('click', function(){
            let content = document.querySelector('.hidden');
            if(content.style.maxHeight){
                content.style.maxHeight = null;
            }else{
                content.style.maxHeight = content.scrollHeight + 'px';
                /*content.scrollHeight это высота всего контента с блоке hiden_item*/
            }
        })