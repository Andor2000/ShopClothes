<?php
session_start();
$title = 'Просмотр товара';
include("header.php");
?>

<h2>Оформление заказа</h2>

<div class="row">
    <div class="col-md-9 col-sm-12">
        <div class="row border p-3 mr-2 mb-1" style="background: #ffffff; border-radius: 20px;" id="backet_tovar_1">
            <div class="col-sm-12 col-md-3 photo_tovar_variant">
                <img class="img_tovar_variant" src="img/product/asa.jpg" alt="mdo">
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="d-flex justify-content-between w-100">
                    <h2 class="featurette-heading fw-normal lh mb-0">Zara</h2>
                    <div class="trash" onclick="basket_trash('1')">
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
                        <div class="d-flex">
                            <div id="basket_price_1">800</div>
                            <div>р</div>
                        </div>
                        <div class="d-flex">
                            <button class="btn_count_tovar" onclick="minus_count_tovar('1')">-</button>
                            <div id="basket_count_1">1</div>
                            <button class="btn_count_tovar" onclick="add_count_tovar('1')">+</button>
                        </div>
                    </div>
                </div>
                <div class="mt-2 d-flex">Итого:
                    <div class="fw-bolder ml-1 basket_price_tovar" id="backet_itogo_1">800</div>
                    <div class="fw-bolder">р</div>
                </div>
            </div>
        </div>
        <div class="row border p-3 mr-2 mb-1" style="background: #ffffff; border-radius: 20px;" id="backet_tovar_2">
            <div class="col-sm-12 col-md-3 photo_tovar_variant">
                <img class="img_tovar_variant" src="img/product/aaa.jpg" alt="mdo">
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="d-flex justify-content-between w-100">
                    <h2 class="featurette-heading fw-normal lh mb-0">Zara</h2>
                    <div class="trash" onclick="basket_trash('2')">
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
                        <div class="d-flex">
                            <div id="basket_price_2">800</div>
                            <div>р</div>
                        </div>
                        <div class="d-flex">
                            <button class="btn_count_tovar" onclick="minus_count_tovar('2')">-</button>
                            <div id="basket_count_2">1</div>
                            <button class="btn_count_tovar" onclick="add_count_tovar('2')">+</button>
                        </div>
                    </div>
                </div>
                <div class="mt-2 d-flex">Итого:
                    <div class="fw-bolder ml-1 basket_price_tovar" id="backet_itogo_2">800</div>
                    <div class="fw-bolder">р</div>
                </div>
            </div>
        </div>
        <div class="row border p-3 mr-2 mb-1" style="background: #ffffff; border-radius: 20px;" id="backet_tovar_3">
            <div class="col-sm-12 col-md-3 photo_tovar_variant">
                <img class="img_tovar_variant" src="img/product/asf.jpeg" alt="mdo">
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="d-flex justify-content-between w-100">
                    <h2 class="featurette-heading fw-normal lh mb-0">Zara</h2>
                    <div class="trash" onclick="basket_trash('3')">
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
                        <div class="d-flex">
                            <div id="basket_price_3">800</div>
                            <div>р</div>
                        </div>
                        <div class="d-flex">
                            <button class="btn_count_tovar" onclick="minus_count_tovar('3')">-</button>
                            <div id="basket_count_3">1</div>
                            <button class="btn_count_tovar" onclick="add_count_tovar('3')">+</button>
                        </div>
                    </div>
                </div>
                <div class="mt-2 d-flex">Итого:
                    <div class="fw-bolder ml-1 basket_price_tovar" id="backet_itogo_3">800</div>
                    <div class="fw-bolder">р</div>
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
                <div class="mr-2">Товары (3)</div>
                <div class="mr-2"></div>
                <div class="d-flex">
                    <div id="basket_details_order">2 400</div>
                    р
                </div>
            </li>
            <li>
                <div class="mr-2">Скидка</div>
                <div></div>
                <div class="ml-2">0р</div>
            </li>
        </ul>
        <h4 class="mt-4 d-flex">Итого:
            <div class="d-flex ml-1">
                <div id="basket_details_order_itogo">2 400</div>
                <div>р</div>
            </div>
        </h4>
        <div class="mb-3">
            <button class="button_buy w-100" style="height: 55px;">Перейти к оформлению</button>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>