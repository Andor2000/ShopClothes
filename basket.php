<?php
session_start();
$title = 'Просмотр товара';
include("header.php");
?>

<h2>Оформление заказа</h2>

<div class="row">
    <div class="col-md-9 col-sm-12">
        <div class="row border p-3 mr-2 mb-1" style="background: #ffffff; border-radius: 20px;">
            <div class="col-sm-12 col-md-3 photo_tovar_variant">
                <img class="img_tovar_variant" src="img/product/asa.jpg" alt="mdo">
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="d-flex justify-content-between w-100">
                    <h2 class="featurette-heading fw-normal lh mb-0">Zara</h2>
                    <div class="trash">
                        <img class="w-100" src="img/shop/trash.png" alt="mdo">
                    </div>
                </div>
                <p class="lead mt-0 mb-2">Штанишки синие</p>
                <div class="d-flex mt-3">
                    <div>
                        <div>Размер:</div>
                        <div>Цена:</div>
                        <div>Количество:</div>
                    </div>
                    <div class="ml-4">
                        <div>XL</div>
                        <div>800р</div>
                        <div>
                            <button class="btn_count_tovar">-</button>
                            1
                            <button class="btn_count_tovar">+</button>
                        </div>
                    </div>
                </div>
                <div class="mt-2">Итого:
                    <b>800р</b>
                </div>
            </div>
        </div>
        <div class="row border p-3 mr-2 mb-1" style="background: #ffffff; border-radius: 20px;">
            <div class="col-sm-12 col-md-3 photo_tovar_variant">
                <img class="img_tovar_variant" src="img/product/aaa.jpg" alt="mdo">
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="d-flex justify-content-between w-100">
                    <h2 class="featurette-heading fw-normal lh mb-0">Zara</h2>
                    <div class="trash">
                        <img class="w-100" src="img/shop/trash.png" alt="mdo">
                    </div>
                </div>
                <p class="lead mt-0 mb-2">Штанишки синие</p>
                <div class="d-flex mt-3">
                    <div>
                        <div>Размер:</div>
                        <div>Цена:</div>
                        <div>Количество:</div>
                    </div>
                    <div class="ml-4">
                        <div>XL</div>
                        <div>800р</div>
                        <div>
                            <button class="btn_count_tovar">-</button>
                            1
                            <button class="btn_count_tovar">+</button>
                        </div>
                    </div>
                </div>
                <div class="mt-2">Итого:
                    <b>800р</b>
                </div>
            </div>
        </div>
        <div class="row border p-3 mr-2 mb-1" style="background: #ffffff; border-radius: 20px;">
            <div class="col-sm-12 col-md-3 photo_tovar_variant">
                <img class="img_tovar_variant" src="img/product/asf.jpeg" alt="mdo">
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="d-flex w-100">
                    <h2 class="featurette-heading fw-normal lh mb-0">Zara</h2>
                    <div class="trash">
                        <img class="w-100" src="img/shop/trash.png" alt="mdo">
                    </div>
                </div>
                <p class="lead mt-0 mb-2">Штанишки синие</p>
                <div class="d-flex mt-3">
                    <div>
                        <div>Размер:</div>
                        <div>Цена:</div>
                        <div>Количество:</div>
                    </div>
                    <div class="ml-4">
                        <div>XL</div>
                        <div>800р</div>
                        <div>
                            <button class="btn_count_tovar">-</button>
                            1
                            <button class="btn_count_tovar">+</button>
                        </div>
                    </div>
                </div>
                <div class="mt-2">Итого:
                    <b>800р</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Общий подсчет -->
    <!-- <div class="col-md-3 col-sm-12 h-100 border" style="background: #ffffff; border-radius: 20px; position: sticky; top: 2em; bottom: 0"> -->
    <div class="col-md-3 col-sm-12 h-100 details_order">
        <h3>Детали заказа</h3>
        <ul style="padding-left: 0;">
            <li>
                <div class="mr-2">Товары (2)</div>
                <div></div>
                <div class="ml-2">800р</div>
            </li>
            <li>
                <div class="mr-2">Скидка</div>
                <div></div>
                <div class="ml-2">0р</div>
            </li>
        </ul>
        <h4 class="mt-4">Итого: 800р</h4>
        <div class="mb-3">
            <button class="button_buy w-100" style="height: 55px;">Перейти к оформлению</button>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>