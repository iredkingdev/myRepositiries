//обращаемся ко всем data_src_img_class_image
let get_data_src_img_class_image = document.querySelectorAll('.image[data-src]');
let get_src_img_class_image = document.querySelectorAll('.image[src]'); //массив img
let arr_position_image = [];
let get_section_gallery = document.querySelector('.section-gallery');
//console.log(arr_position_image);



if(get_src_img_class_image.length > 0){
    /*get_src_img_class_image.forEach(img=> {
        arr_position_image.push(img.getBoundingClientRect().top + scrollY);
    })*/
    for(let i = 0; i < get_src_img_class_image.length; i++){
        //console.log(get_src_img_class_image[i]);//33
        getBCR = get_src_img_class_image[i].getBoundingClientRect().top + scrollY;
        arr_position_image.push(getBCR); //- заполнили координатами console.log(arr_position_image);
        load_picturies();
    }
    load_picturies();
    console.log(arr_position_image);
}

function load_picturies(){
    
    
    if(scrollY > arr_position_image[0]){
        get_src_img_class_image[0,1,2].src = get_data_src_img_class_image[0,1,2].dataset.src;                        
    }      
}
window.addEventListener('scroll', function() {
    load_picturies();
});



 






