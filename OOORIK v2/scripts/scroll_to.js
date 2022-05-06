let get_write = document.querySelectorAll('.write');
    let block_feedback = document.querySelector('.section-feedback');
        for(let i = 0; i < get_write.length; i++){
            get_write[i].addEventListener('click', function(){
                scrollTo();
            })
        }
        function scrollTo(){
            console.log('Кнопка нажата');
            block_feedback.scrollIntoView({behavior: "smooth"});
        }       