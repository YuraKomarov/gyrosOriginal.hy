<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php

use Bitrix\Main\Page\Asset;

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <?php
    $APPLICATION->ShowHead();
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>

    <?php
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/bootstrap.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/jquery.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/popper.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/bootstrap.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/js.js');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Exo|Exo+2" rel="stylesheet">');
    ?>


</head>
<body>

<div id="panel"><? $APPLICATION->ShowPanel() ?></div>

<div class="container">
    <div class="row header">
        <div class="offset-1 col-4">
            <div class="row">
                <div class="col-3">
                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/logo.png" height="50" width="50"/>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="row">
                            <div id="logotitle">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "standard.php",
                                        "PATH" => "/local/templates/gyros/include_areas/site_name_inc.php"
                                    )
                                );?>
                            </div>
                        </div>
                        <div class="row">
                            <div id="logoprefix">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "standard.php",
                                        "PATH" => "/local/templates/gyros/include_areas/logo_prefix_inc.php"
                                    )
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="row">
                <div class="col-12">
                <span class="headcard">
                  2 товара &#8744
                </span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    Итого 650 &#8381
                </div>
            </div>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-danger tocard">КОРЗИНA</button>
        </div>

        <div class="col-3">
            <div class="row">
            <? $APPLICATION->IncludeComponent("bitrix:menu", "Main_top_menu", Array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                "ROOT_MENU_TYPE" => "main",    // Тип меню для первого уровня
                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => "catalog_horizontal_old",
                "MENU_THEME" => "site",    // Тема меню
            ),
                false
            ); ?>
            </div>
        </div>
    </div>
</div>
<div class="headbanner"></div>
<div class="content">
    <div class="container  contacts">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <p class="address">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "standard.php",
                                    "PATH" => "/local/templates/gyros/include_areas/address_left_inc.php"
                                )
                            );?>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "standard.php",
                                    "PATH" => "/local/templates/gyros/include_areas/phone_left_inc.php"
                                )
                            );?>
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <p class="address">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "standard.php",
                                    "PATH" => "/local/templates/gyros/include_areas/address_right_inc.php"
                                )
                            );?>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "standard.php",
                                    "PATH" => "/local/templates/gyros/include_areas/phone_right_inc.php"
                                )
                            );?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container menu">