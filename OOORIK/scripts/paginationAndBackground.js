$(document).ready(function(){
    let getHeader = $('.header');
    let arrayColor = 'url(img/b2.jpg)';
    if(getHeader.css('background-image', arrayColor)){
        $('#second').addClass('active');
    }
   function background(){
        $('#first').on('click', function(){
            $('.header').css({
                'background-image':'url(img/b1.jpg)',
                
            })
        })
        $('#second').on('click', function(){
            $('.header').css({
                'background-image':'url(img/b2.jpg)',
                
            })
        })
        $('#thert').on('click', function(){
            $('.header').css({
                'background-image':'url(img/b3.jpg)',
                
            })
        })
   }
   
   function burger(){
        $('.burger').on('click', function(){
            $('.header-ul').toggleClass('active');
            $('.header-ul.active').css('z-index','2');
            $('body').toggleClass('no-scroll');
            $('.burger').toggleClass('z-index');
        })
   }

    
    $('.li-pag').click(function() {  
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
    });

    
    background();
    burger();
});