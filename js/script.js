////
/// ПРОСМОТР ТОВАРА
///

// Поменять фотографию
function change_photo_variant(src, number) {
    let help = document.getElementsByClassName('img_tovar_variant');
    for (var i = 0; i < help.length; ++i) {
        help[i].style.border = 'none';
    };
    document.getElementById(number).style.border = "2px black solid";
    document.getElementById('id_photo_tovar').src = src;

}