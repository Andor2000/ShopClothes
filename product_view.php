<?php
session_start();
$title = 'Просмотр товара';
?>

<?php include("header.php"); ?>

<div class="row featurette">
    <div class="col-md-4 col-sm-12">
        <div class="photo_tovar_variant">
            <img class="img_tovar_variant" src="img/product/asa.jpg" alt="mdo">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <h2 class="featurette-heading fw-normal lh-1">Zara</h2>
        <p class="lead">Штанишки синие</p>
        <div class="d-flex me-5">
            <div class="photo_tovar_variant"><img class="img_tovar_variant me-5" src="img/product/asa.jpg" alt="mdo"></div>
            <div class="photo_tovar_variant"><img class="img_tovar_variant me-5" src="img/product/asf.jpeg" alt="mdo"></div>
            <div class="photo_tovar_variant"><img class="img_tovar_variant me-5" src="img/product/aaa.jpg" alt="mdo"></div>
            <div class="photo_tovar_variant"><img class="img_tovar_variant me-5" src="img/product/das.jpeg" alt="mdo"></div>
        </div>
        <h5 class="mt-2">Размер</h5>
        <div class="d-flex">
            <button class="btn btn-outline pl-2">S</button>
            <button class="btn btn-outline ml-1">L</button>
            <button class="btn btn-outline pl-2">X</button>
            <button class="btn btn-outline ml-1">XL</button>
        </div>
        <div>
            <button class="button_buy">Добавить в корзину</button>
        </div>
        <h5 class="despection mt-2">Описание</h5>
        <p>
            Худи оттенка хаки выполнено из хлопкового петельчатого футера с надписью Smile more. Материал из натурального хлопка позволяет коже дышать и не вызывает раздражение и аллергию.
            <br>
            Нет — строгим линиям, да — свободе движений и расслабленным образам — это фасон oversize в коллекции худи. Объёмную модель можно надеть со свободными джинсами, спортивными брюками и велосипедками, юбками мини и макси. Особенности кроя: укороченный oversize крой, капюшон с функциональным шнурком, длинные рукава со спущенным плечом, манжеты и низ из рельефной трикотажной резинки в рубчик.
            <br>
            Рекомендуем сочетать худи с комплектными брюками фасона Baggy из женской коллекции, а также со светлыми кроссовками или кедами.
        </p>
    </div>
</div>


<?php include("footer.php"); ?>