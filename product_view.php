<?php
session_start();
$title = 'Просмотр товара';
?>

<?php include("header.php"); ?>

<div class="row featurette">
    <div class="col-md-1"></div>
    <div class="col-md-3 col-sm-12">
        <img class="img_tovar_variant" src="img/product/asa.jpg" alt="mdo" width="100%">
    </div>
    <div class="col-md-6 col-sm-12">
        <h2 class="featurette-heading fw-normal lh-1">Zara</h2>
        <p class="lead">Штанишки синие</p>
        <div class="d-flex ml-5">
            <img class="img_tovar_variant me-2 " src="img/product/asa.jpg" alt="mdo" width="15%">
            <img class="img_tovar_variant me-2 " src="img/product/asf.jpeg" alt="mdo" width="15%">
            <img class="img_tovar_variant me-2 " src="img/product/aaa.jpg" alt="mdo" width="15%">
            <img class="img_tovar_variant me-2 " src="img/product/das.jpeg" alt="mdo" width="15%">
        </div>
        <h5 class="mt-2">Размер</h5>
        <div class="d-flex">
            <button class="btn btn-outline pl-2">S</button>
            <button class="btn btn-outline ml-1">L</button>
            <button class="btn btn-outline pl-2">X</button>
            <button class="btn btn-outline ml-1">XL</button>
        </div>
        <div>
            <button class="button_buy" >Добавить в корзину</button>
        </div>
        <h5 class="mt-2">Описание</h5>
        <p>текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст </p>
    </div>
</div>


<?php include("footer.php"); ?>