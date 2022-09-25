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


// 
// Корзина
// 
function add_count_tovar(id_tovar) {
    let count = Number(document.getElementById('basket_count_' + id_tovar).innerHTML) + 1;
    let price = Number(document.getElementById('basket_price_' + id_tovar).innerHTML);
    document.getElementById('basket_count_' + id_tovar).innerHTML = count;
    document.getElementById('backet_itogo_' + id_tovar).innerHTML = beautiful_price(price * count);

    basket_count_price_itogo();
}

function minus_count_tovar(id_tovar) {
    if (Number(document.getElementById('basket_count_' + id_tovar).innerHTML) > 1) {
        let count = Number(document.getElementById('basket_count_' + id_tovar).innerHTML) - 1;
        let price = Number(document.getElementById('basket_price_' + id_tovar).innerHTML);
        document.getElementById('basket_count_' + id_tovar).innerHTML = count;
        document.getElementById('backet_itogo_' + id_tovar).innerHTML = beautiful_price(price * count);

        basket_count_price_itogo();
    }
}

function basket_trash(id_tovar) {
    document.getElementById('backet_tovar_' + id_tovar).style.display = "none";
    document.getElementById('backet_itogo_' + id_tovar).innerHTML = 0;
    basket_count_price_itogo();

}

function basket_count_price_itogo() {
    let itogo_price = document.getElementsByClassName('basket_price_tovar');
    let itogo = 0;
    for (var i = 0; i < itogo_price.length; ++i) {
        itogo = itogo + Number(itogo_price[i].innerHTML.split(' ').join(''));
    };

    document.getElementById('basket_details_order').innerHTML = beautiful_price(itogo)
    document.getElementById('basket_details_order_itogo').innerHTML = beautiful_price(itogo)
}

// красивый вывод цены
function beautiful_price(data) {
    return price = Number.prototype.toFixed.call(parseFloat(data) || 0),
        price_sep = price.replace(/(\D)/g, ","),
        price_sep = price_sep.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1 ");
}
