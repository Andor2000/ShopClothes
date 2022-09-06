// слайдер 
document.getElementById('myCarousel').style.height = (document.getElementById('myCarousel').offsetWidth / 4) + 'px';
// фото товаров
let help = document.getElementsByClassName('img_tovar');
// document.getElementsByClassName('img_tovar').style.height = (document.getElementsByClassName('img_tovar').offsetWidth / 9 * 26) + 'px';

for (var i = 0; i < help.length; ++i) {
    console.log(help[i].offsetWidth);
    help[i].style.height = help[i].offsetWidth / 3 * 4 + 'px';
};

