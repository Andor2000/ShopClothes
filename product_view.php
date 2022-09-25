<?php
session_start();
$title = 'Просмотр товара';
include("header.php");
?>

<div class="row featurette">
    <div class="col-md-1"></div>
    <div class="col-md-4 col-sm-12 h-100 photo_buy">
        <div  style="position: relative; overflow: hidden; width: 100%; cursor: pointer; padding: 0 0 100% 0; min-height:500px;">
            <img src="img/product/asa.jpg" id="id_photo_tovar"  style="width: 100%; height:100%; object-fit: cover; position: absolute;" alt="mdo">
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <h2 class="featurette-heading fw-normal lh-1 mb-0">Zara</h2>
        <p class="lead mt-0 mb-2">Штанишки синие</p>
        <div class="price mr-5" style="font-size:25px">999 ₽</div>
        <div class="row m-0 p-0 col-7 mt-2">
            <div class="photo_tovar_variant col-3"><img id="id_img_tovar_variant_1" class="img_tovar_variant border_variant" src="img/product/asa.jpg" alt="mdo" onclick="change_photo_variant('img/product/asa.jpg', 'id_img_tovar_variant_1')"></div>
            <div class="photo_tovar_variant col-3"><img id="id_img_tovar_variant_2" class="img_tovar_variant" src="img/product/asf.jpeg" alt="mdo" onclick="change_photo_variant('img/product/asf.jpeg', 'id_img_tovar_variant_2')"></div>
            <div class="photo_tovar_variant col-3"><img id="id_img_tovar_variant_3" class="img_tovar_variant" src="img/product/aaa.jpg" alt="mdo" onclick="change_photo_variant('img/product/aaa.jpg', 'id_img_tovar_variant_3')"></div>
            <div class="photo_tovar_variant col-3"><img id="id_img_tovar_variant_4" class="img_tovar_variant" src="img/product/das.jpeg" alt="mdo" onclick="change_photo_variant('img/product/das.jpeg', 'id_img_tovar_variant_4')"></div>
        </div>
        <h5 class="mt-2">Размер</h5>
        <div class="d-flex mb-2">
            <input type="radio" class="btn-check" name="options-outlined" id="radio_1" autocomplete="off" checked>
            <label class="btn mr-1" for="radio_1">S</label>

            <input type="radio" class="btn-check" name="options-outlined" id="radio_2" autocomplete="off">
            <label class="btn mr-1" for="radio_2">L</label>

            <input type="radio" class="btn-check" name="options-outlined" id="radio_3" autocomplete="off">
            <label class="btn mr-1" for="radio_3">SS</label>

            <input type="radio" class="btn-check" name="options-outlined" id="radio_4" autocomplete="off">
            <label class="btn mr-1" for="radio_4">L</label>
        </div>
        <div class="mb-3">
            <button class="button_buy">Добавить в корзину</button>
        </div>
        <!--  -->
        <h5 class="mt-2 description_tovar">Описание</h5>
        <p>
            Худи оттенка хаки выполнено из хлопкового петельчатого футера с надписью Smile more. Материал из натурального хлопка позволяет коже дышать и не вызывает раздражение и аллергию.
            <br>
            Нет — строгим линиям, да — свободе движений и расслабленным образам — это фасон oversize в коллекции худи. Объёмную модель можно надеть со свободными джинсами, спортивными брюками и велосипедками, юбками мини и макси. Особенности кроя: укороченный oversize крой, капюшон с функциональным шнурком, длинные рукава со спущенным плечом, манжеты и низ из рельефной трикотажной резинки в рубчик.
            <br>
            Рекомендуем сочетать худи с комплектными брюками фасона Baggy из женской коллекции, а также со светлыми кроссовками или кедами.
        </p>
        <!--  -->
        <h5 class="mt-2">Дополнительная информация</h5>
        <ul style="padding-left: 0;">
            <li>
                <div class="mr-2">Состав</div>
                <div></div>
                <div class="w-50 ml-2">Солома</div>
            </li>
            <li>
                <div class="mr-2">Акции</div>
                <div></div>
                <div class="w-50 ml-2">Нет</div>
            </li>
            <li>
                <div class="mr-2">Рекомендации</div>
                <div></div>
                <div class="w-50 ml-2">Отсутствуют</div>
            </li>
            <li>
                <div class="mr-2">Состав</div>
                <div></div>
                <div class="w-50 ml-2">Солома</div>
            </li>
            <li>
                <div class="mr-2">Акции</div>
                <div></div>
                <div class="w-50 ml-2">Нет</div>
            </li>
            <li>
                <div class="mr-2">Рекомендации</div>
                <div></div>
                <div class="w-50 ml-2">Отсутствуют</div>
            </li>
        </ul>
    </div>
</div>

<!--  -->
<div class="mt-5 ml-2">
    <h3>Отзывы о товаре</h3>
</div>

<div class="row">
    <div class="col-md-7 col-sm-12">
        <div class="comment border-bottom pb-2">
            <div class="d-flex w-100 justify-content-between">
                <div class="comment_author d-flex">
                    <h6 class="ml-2">Андрюша</h6>
                    <div class="rating-area ml-2">
                        <input type="radio" id="star-5" name="rating_1" value="5" disabled checked>
                        <label for="star-5" title="Оценка «5»"></label>
                        <input type="radio" id="star-4" name="rating_1" value="4" disabled>
                        <label for="star-4" title="Оценка «4»"></label>
                        <input type="radio" id="star-3" name="rating_1" value="3" disabled>
                        <label for="star-3" title="Оценка «3»"></label>
                        <input type="radio" id="star-2" name="rating_1" value="2" disabled>
                        <label for="star-2" title="Оценка «2»"></label>
                        <input type="radio" id="star-1" name="rating_1" value="1" disabled>
                        <label for="star-1" title="Оценка «1»"></label>
                    </div>
                </div>
                <div>
                    <div class="mr-2" style="color:#939292f9;">20.12.2022</div>
                </div>
            </div>
            <div class="comment_text ml-2">
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
            </div>
        </div>
        <!--  -->
        <div class="comment border-bottom pb-2">
            <div class="comment_author d-flex">
                <h6>Андрюша</h6>
                <div class="rating-area ml-2">
                    <input type="radio" id="star-5" name="rating_2" value="5" disabled>
                    <label for="star-5" title="Оценка «5»"></label>
                    <input type="radio" id="star-4" name="rating_2" value="4" disabled>
                    <label for="star-4" title="Оценка «4»"></label>
                    <input type="radio" id="star-3" name="rating_2" value="3" disabled checked>
                    <label for="star-3" title="Оценка «3»"></label>
                    <input type="radio" id="star-2" name="rating_2" value="2" disabled>
                    <label for="star-2" title="Оценка «2»"></label>
                    <input type="radio" id="star-1" name="rating_2" value="1" disabled>
                    <label for="star-1" title="Оценка «1»"></label>
                </div>
            </div>
            <div class="comment_text">
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
            </div>
        </div>
        <!--  -->
        <div class="comment border-bottom pb-2">
            <div class="comment_author d-flex">
                <h6>Андрюша</h6>
                <div class="rating-area ml-2">
                    <input type="radio" id="star-5" name="rating_3" value="5" disabled>
                    <label for="star-5" title="Оценка «5»"></label>
                    <input type="radio" id="star-4" name="rating_3" value="4" disabled checked>
                    <label for="star-4" title="Оценка «4»"></label>
                    <input type="radio" id="star-3" name="rating_3" value="3" disabled>
                    <label for="star-3" title="Оценка «3»"></label>
                    <input type="radio" id="star-2" name="rating_3" value="2" disabled>
                    <label for="star-2" title="Оценка «2»"></label>
                    <input type="radio" id="star-1" name="rating_3" value="1" disabled>
                    <label for="star-1" title="Оценка «1»"></label>
                </div>
            </div>
            <div class="comment_text">
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="mt-5 ml-2">
    <h3>Похожии товары</h3>
</div>

<div class="row">
    <div class="col-xl-2 col-md-2 col-sm-2 tovar">
        <div class="photo_tovar">
            <a href="product_view.php">
                <img class="img_tovar" src="img/product/asf.jpeg" alt="mdo" style="text-align: center;">
                <button class="btn btn-outline-dark photo_tovar_button" href="product_view.php">Быстрый просмотр</button>
            </a>
        </div>
        <div class="tovar_photo_price">
            <div class="price">2 299 ₽</div>
            <div class="firm">Zara</div>
            <div class="designation">Юбка белая</div>
        </div>
    </div>
    <div class="col-xl-2 col-md-2 col-sm-2 tovar">
        <div class="photo_tovar">
            <img class="img_tovar" src="img/product/aaa.jpg" alt="mdo" style="text-align: center;">
            <button class="btn btn-outline-dark photo_tovar_button">Быстрый просмотр</button>
        </div>
        <div class="tovar_photo_price">
            <div class="price">2 299 ₽</div>
            <div class="firm">Zara</div>
            <div class="designation">Юбка белая</div>
        </div>
    </div>
    <div class="col-xl-2 col-md-2 col-sm-2 tovar">
        <div class="photo_tovar">
            <a href="product_view.php">
                <img class="img_tovar" src="img/product/asf.jpeg" alt="mdo" style="text-align: center;">
                <button class="btn btn-outline-dark photo_tovar_button" href="product_view.php">Быстрый просмотр</button>
            </a>
        </div>
        <div class="tovar_photo_price">
            <div class="price">2 299 ₽</div>
            <div class="firm">Zara</div>
            <div class="designation">Юбка белая</div>
        </div>
    </div>
    <div class="col-xl-2 col-md-2 col-sm-2 tovar">
        <div class="photo_tovar">
            <img class="img_tovar" src="img/product/aaa.jpg" alt="mdo" style="text-align: center;">
            <button class="btn btn-outline-dark photo_tovar_button">Быстрый просмотр</button>
        </div>
        <div class="tovar_photo_price">
            <div class="price">2 299 ₽</div>
            <div class="firm">Zara</div>
            <div class="designation">Юбка белая</div>
        </div>
    </div>
    <div class="col-xl-2 col-md-2 col-sm-2 tovar">
        <div class="photo_tovar">
            <a href="product_view.php">
                <img class="img_tovar" src="img/product/asf.jpeg" alt="mdo" style="text-align: center;">
                <button class="btn btn-outline-dark photo_tovar_button" href="product_view.php">Быстрый просмотр</button>
            </a>
        </div>
        <div class="tovar_photo_price">
            <div class="price">2 299 ₽</div>
            <div class="firm">Zara</div>
            <div class="designation">Юбка белая</div>
        </div>
    </div>
    <div class="col-xl-2 col-md-2 col-sm-2 tovar">
        <div class="photo_tovar">
            <img class="img_tovar" src="img/product/aaa.jpg" alt="mdo" style="text-align: center;">
            <button class="btn btn-outline-dark photo_tovar_button">Быстрый просмотр</button>
        </div>
        <div class="tovar_photo_price">
            <div class="price">2 299 ₽</div>
            <div class="firm">Zara</div>
            <div class="designation">Юбка белая</div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>