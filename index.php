<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Гирос Ориджинал");
?>

<? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "categories", Array(
    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE" => "A",    // Тип кеширования
    "COUNT_ELEMENTS" => "N",    // Показывать количество элементов в разделе
    "IBLOCK_ID" => "4",    // Инфоблок
    "IBLOCK_TYPE" => "food",    // Тип инфоблока
    "SECTION_CODE" => "",    // Код раздела
    "SECTION_FIELDS" => array(    // Поля разделов
        0 => "NAME",
        1 => "",
    ),
    "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела
    "SECTION_URL" => "",    // URL, ведущий на страницу с содержимым раздела
    "SECTION_USER_FIELDS" => array(    // Свойства разделов
        0 => "",
        1 => "",
    ),
    "SHOW_PARENT_NAME" => "Y",    // Показывать название раздела
    "TOP_DEPTH" => "2",    // Максимальная отображаемая глубина разделов
    "VIEW_MODE" => "TEXT",    // Вид списка подразделов
    "COMPONENT_TEMPLATE" => ".default"
),
    false
); ?>


    <div class="row menutitle">
        Гирос
    </div>
    <div class="row category">
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пита Гирос вегетарианский
            </p>
            <p class="productcomposition">
                Пита, помидор, лук, лист салата, картофель фри, соус дзадзики, зелень. 400гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="sizeswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="size selected">
                                            Стандарт
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="size">
                                            Маленькая
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        205 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пита Каламаки курица в беконе
            </p>
            <p class="productcomposition">
                Пита, Шпажка куриного шашлыка, завернутого в бекон, помидор, лист салата, картофель фри, лук, сос-соус.
                450гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="sizeswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="size selected">
                                            Стандарт
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="size">
                                            Маленькая
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        300 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пита Гирос
            </p>
            <p class="productcomposition">
                Пита, курица, помидор, лист салата, картофель фри, сос-соус. 450гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="sizeswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="size selected">
                                            Стандарт
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="size">
                                            Маленькая
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="producsize">
                Выбор мяса:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="meat selected">
                                            Курица
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="meat">
                                            Свинина
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        275 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пита Каламаки
            </p>
            <p class="productcomposition">
                Пита, шпажка куриного шашлыка, помидор, лист салата, картофель фри, сос-соус. 400гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="sizeswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="size selected">
                                            Стандарт
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="size">
                                            Маленькая
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="producsize">
                Выбор мяса:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="meat selected">
                                            Курица
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="meat">
                                            Свинина
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        275 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row menutitle">
        Гирос на тарелке
    </div>
    <div class="row category">
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Каламаки на тарелке
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="sizeswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="size selected">
                                            Стандарт
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="size">
                                            Маленькая
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="producsize">
                Выбор мяса:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="meat selected">
                                            Курица
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="meat">
                                            Свинина
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Каламаки курица в беконе на тарелке
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-сщус. 550гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="sizeswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="size selected">
                                            Стандарт
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="size">
                                            Маленькая
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        205 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пита Гирос вегетарианский
            </p>
            <p class="productcomposition">
                Пита, помидор, лук, лист салата, картофель фри, соус дзадзики, зелень. 400гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="sizeswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="size selected">
                                            Стандарт
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="size">
                                            Маленькая
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="producsize">
                Выбор мяса:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-11">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="meat selected">
                                            Курица
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="meat">
                                            Свинина
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        205 Р
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row menutitle">
        Гирос роллы
    </div>
    <div class="row category">
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Гирос ролл на углях
            </p>
            <p class="productcomposition">
                Пита, помидор, лук, лист салата, картофель фри, соус дзадзики, зелень. 400гр.
            </p>
            <p class="producsize">
                Выбор мяса:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="meat selected">
                                            Курица
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="meat">
                                            Свинина
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="meat">
                                            Микс
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="producsize">
                Добавки к блюду:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-9">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="meat">
                                            Сыр
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="meat">
                                            Огурчик
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="meat">
                                            Бекон
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        205 Р
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row menutitle">
        Скепасти и сэндвичи
    </div>
    <div class="row category">
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Скепасти на углях
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="sizeswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="size selected">
                                            Стандарт
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="size">
                                            Маленькая
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="producsize">
                Выбор мяса:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="meat selected">
                                            Курица
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="meat">
                                            Свинина
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="producsize">
                Добавки к блюду:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="add">
                                            Бекон
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="add">
                                            Соус сальса
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="add">
                                            Сыр
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="add">
                                            Огурчик
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Клаб сэндвич
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-сщус. 550гр.
            </p>
            <p class="producsize">
                Выбор мяса:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-10">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="meat selected">
                                            Ветчина
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="meat">
                                            Курица
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        275 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Сэндвич "Торнадо"
            </p>
            <p class="productcomposition">
                Пита, помидор, лук, лист салата, картофель фри, соус дзадзики, зелень. 400гр.
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        300 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row menutitle">
        Пицца
    </div>
    <div class="row category">
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row menutitle">
        Салаты
    </div>
    <div class="row category">
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Пицца "Пепперони"
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row menutitle">
        Закуски и соусы
    </div>
    <div class="row category">
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Сосус сос
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Сосус сос
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Сосус сос
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Сосус сос
            </p>
            <p class="productcomposition">
                Пита,три шпажки куриного шашлыка, помидор жареный, лист салата, картофель фри, сос-соус. 550гр.
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        370 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row menutitle">
        Напитки
    </div>
    <div class="row category">
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Ананасовый сок
            </p>
            <p class="productcomposition">
                Ананалосвый сок
            </p>
            <p class="producsize">
                Выбор размера:
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="col-7">
                        <div class="row">
                            <div class="meatswitcher">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="meat selected">
                                            0.5 л.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="meat">
                                            0.33 л.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        90 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Ананасовый сок
            </p>
            <p class="productcomposition">
                Ананалосвый сок
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        90 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Ананасовый сок
            </p>
            <p class="productcomposition">
                Ананалосвый сок
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        90 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Ананасовый сок
            </p>
            <p class="productcomposition">
                Ананалосвый сок
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        90 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Ананасовый сок
            </p>
            <p class="productcomposition">
                Ананалосвый сок
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        90 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Ананасовый сок
            </p>
            <p class="productcomposition">
                Ананалосвый сок
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        90 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/vegeterianskiy.jpg" class="productpicture" alt="">
            <p class="productname">
                Ананасовый сок
            </p>
            <p class="productcomposition">
                Ананалосвый сок
            </p>
            <div class="row">
                <div class="col-6">
                    <p class="productprice">
                        90 ₽
                    </p>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger tocard">В КОРЗИНУ</button>
                </div>
            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>