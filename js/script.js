// слайдер 
//document.getElementById('myCarousel').style.height = (document.getElementById('myCarousel').offsetWidth / 4) + 'px';
// фото товаров
let help = document.getElementsByClassName('img_tovar');
for (var i = 0; i < help.length; ++i) {
     help[i].style.height = help[i].offsetWidth / 9 * 16 + 'px';
};
help = document.getElementsByClassName('img_tovar_variant');
// document.getElementsByClassName('img_tovar').style.height = (document.getElementsByClassName('img_tovar').offsetWidth / 9 * 26) + 'px';

for (var i = 0; i < help.length; ++i) {
    help[i].style.height = help[i].offsetWidth / 3 * 4 + 'px';
};

