<?php
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    CModule::IncludeModule("iblock");
    use Bitrix\Main\Page\Asset;

    define('IMAGES_PATH', SITE_TEMPLATE_PATH.'/assets/images/');
    define('CLEAR_PATH', preg_replace('/\\?.*/', '', $_SERVER['REQUEST_URI']));

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

        $assetInstance->addJs(SITE_TEMPLATE_PATH."/assets/js/fslightbox.js");
        $assetInstance->addJs(SITE_TEMPLATE_PATH."/assets/js/script.js");
        $assetInstance->addJs(SITE_TEMPLATE_PATH."/custom.js");
    ?>

    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-19747878-10', 'auto');

        ga('send', 'pageview');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M6PFSQD');</script>

    <!-- End Google Tag Manager -->

    <?php $APPLICATION->ShowHead() ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6PFSQD"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php //$APPLICATION->ShowPanel() ?>
    <header class="header text_white text_fz16">
        <div class="container">
            <a href="/" class="header__logo">
                <img src="<?=IMAGES_PATH?>logo.svg" alt="">
            </a>
            <nav class="header__nav text_upper text_fw600">
                <ul>
                    <li><a href="/clients/" class="no-hover">Клиенты</a></li>
                    <li><a href="/cases/" class="no-hover">Проекты</a></li>
                    <li><a href="/bank-cms/" class="no-hover">CMS для Банков</a></li>
                    <li><a href="/news/" class="no-hover">Новости</a></li>
                    <li><a href="/contacts/" class="no-hover">Контакты</a></li>
                </ul>
            </nav>
            <div class="header__right">
                <a href="tel:+74955850659" class="header__phone no-hover">+7 (495) 585-06-59</a>
                <div class="header__social">
                    <a href="https://t.me/TG1CPoly_bot" target="_blank">
                        <img src="<?=IMAGES_PATH?>icons/telegram.svg" alt="">
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=79858195517" target="_blank">
                        <img src="<?=IMAGES_PATH?>icons/whatsapp.svg" alt="">
                    </a>
                </div>
                <button class="btn white short text_fz14 body-click-target" data-content="order">
                    <span>Оставить заявку</span>
                </button>
                <img src="<?=IMAGES_PATH?>icons/menu.svg" alt="" class="header__ham body-click-target" data-content="header-modal">
            </div>
        </div>
    </header>
    <div class="header__mobile body-click-content" data-content="header-modal">
        <div class="modal__close body-click-close"></div>
        <div class="header__mobile-nav">
            <ul>
                <li><a href="/clients/">Клиенты</a></li>
                <li><a href="/cases/">Проекты</a></li>
                <li><a href="/bank-cms/">CMS для Банков</a></li>
                <li><a href="/news/">Новости</a></li>
                <li><a href="/contacts/">Контакты</a></li>
            </ul>
        </div>
        <button class="btn body-click-target" data-content="order">
            <span>Оставить заявку</span>
        </button>
        <div class="header__mobile-social">
            <a href="https://join.skype.com/invite/diCzxMjPi63M" target="_blank">
                <img src="<?=IMAGES_PATH?>icons/skype-color.svg" alt="">
            </a>
            <a href="https://t.me/TG1CPoly_bot" target="_blank">
                <img src="<?=IMAGES_PATH?>icons/telegram-color.svg" alt="">
            </a>
            <a href="https://api.whatsapp.com/send/?phone=79858195517" target="_blank">
                <img src="<?=IMAGES_PATH?>icons/whatsapp-color.svg" alt="">
            </a>
            <a href="mailto:info@armex.ru" target="_blank">
                <img src="<?=IMAGES_PATH?>icons/mail-color.svg" alt="">
            </a>
        </div>
    </div>