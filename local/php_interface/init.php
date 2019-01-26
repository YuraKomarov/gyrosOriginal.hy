<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php

define("DEFAULT_TEMPLATE_PATH", "/local/templates/.default");

function debug($arItems){
    echo '<pre>' . print_r($arItems, 1) . '</pre>';
}
?>