<?php
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    CModule::IncludeModule("iblock");
    use Bitrix\Main\Page\Asset;

    define('IMAGES_PATH', SITE_TEMPLATE_PATH.'/assets/images/');

    $assetInstance = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php
        $assetInstance->addCss(SITE_TEMPLATE_PATH."/assets/css/style.min.css");
        $assetInstance->addCss(SITE_TEMPLATE_PATH."/custom.css");

        $assetInstance->addJs(SITE_TEMPLATE_PATH."/assets/js/script.js");
        $assetInstance->addJs(SITE_TEMPLATE_PATH."/custom.js");
    ?>

    <?php $APPLICATION->ShowHead() ?>
</head>
<body>
    <?php //$APPLICATION->ShowPanel() ?>
    <header class="header text_white text_fz16">
        <div class="container">
            <a href="/" class="header__logo">
                <img src="<?=IMAGES_PATH?>logo.svg" alt="">
            </a>
            <nav class="header__nav text_upper text_fw600">
                <ul>
                    <li><a href="/clients/" class="no-hover">Нам доверяют</a></li>
                    <li><a href="/cases/" class="no-hover">Проекты</a></li>
                    <li><a href="/bank-cms/" class="no-hover">CMS для Банков</a></li>
                    <li><a href="/news/" class="no-hover">Новости</a></li>
                </ul>
            </nav>
            <div class="header__right">
                <a href="tel:+74955850659" class="header__phone no-hover">+7 (495) 585-06-59</a>
                <div class="header__social">
                    <a href="" target="_blank">
                        <img src="<?=IMAGES_PATH?>icons/telegram.svg" alt="">
                    </a>
                    <a href="" target="_blank">
                        <img src="<?=IMAGES_PATH?>icons/whatsapp.svg" alt="">
                    </a>
                </div>
                <button class="btn white short text_fz14">
                    <span>Оставить заявку</span>
                </button>
            </div>
        </div>
    </header>