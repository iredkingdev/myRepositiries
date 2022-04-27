let get_paralax_right = document.querySelectorAll('.click_right');
let get_paralax_left = document.querySelectorAll('.click_left');
let get_track = document.querySelectorAll('.paralax-track');
let get_item = document.querySelector('.item');
let translate_width = get_item.offsetWidth - 100; // расчитали длину сдвига

function click(elem, transl){ 
    for(let i = 0; i < elem.length; i++){
        elem[i].addEventListener('click', function(e){
            let event = e.target;
            console.log(event);
            if(event == elem[0]){
                get_track[0].style.transform = `translate(${transl}px)`;
            }
            if(event == elem[1]){
                get_track[1].style.transform = `translate(${transl}px)`;
            }
            if(event == elem[2]){
                get_track[2].style.transform = `translate(${transl}px)`;
            }
        })
    }
}
click(get_paralax_right, -translate_width);
click(get_paralax_left, translate_width);