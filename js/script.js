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

function add_count_tovar(data) {
    var price = Number.prototype.toFixed.call(parseFloat(data) || 0, 2),
        //заменяем точку на запятую
        price_sep = price.replace(/(\D)/g, ","),
        //добавляем пробел как разделитель в целых
        price_sep = price_sep.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1 ");
}