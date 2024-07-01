<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Решения для банков | Контакты");
    $APPLICATION->SetTitle("Решения для банков | Контакты");
?>
<main class="contacts">
    <section class="page__breadcrumbs text_fz16">
        <div class="container">
            <a href="/">Главная</a> \ Контакты
        </div>
    </section>
    <section class="contacts__info page__block pt0">
        <div class="container">
            <div class="contacts__info-row elem_animate top">
                <h1 class="text_fz36 text_color">Контакты</h1>
                <div class="contacts__info-col text_fz20">
                    <span>
                        <img src="<?=IMAGES_PATH?>icons/phone-color.svg" alt="">
                        <a href="tel:+74955850659">+7 (495) 585-06-59</a>
                        <span class="text_fz14 text_underline body-click-target" data-content="order">Заказать звонок</span>
                    </span>
                    <a href="mailto:info@armex.ru">
                        <img src="<?=IMAGES_PATH?>icons/mail-color.svg" alt="">
                        info@armex.ru
                    </a>
                    <span>
                        <img src="<?=IMAGES_PATH?>icons/map-point-color.svg" alt="">
                        г. Москва, Марксистская улица, 34&nbsp;к4
                    </span>
                    <span>
                        <img src="<?=IMAGES_PATH?>icons/time.svg" alt="">
                        9:30 — 18:30 (Пн—Пт)
                    </span>
                </div>
                <div class="contacts__info-social">
                    <span class="text_fz20 text_fw600">Cвязаться с нами</span>
                    <div class="footer__social text_fz14">
                        <a href="" target="_blank" class="no-hover">
                            <img src="<?=IMAGES_PATH?>icons/whatsapp-color.svg" alt="">
                            WhatsApp
                        </a>
                        <a href="" target="_blank" class="no-hover">
                            <img src="<?=IMAGES_PATH?>icons/telegram-color.svg" alt="">
                            Telegram
                        </a>
                        <a href="" target="_blank" class="no-hover">
                            <img src="<?=IMAGES_PATH?>icons/skype-color.svg" alt="">
                            Skype
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts__map page__block pt0">
        <div class="container">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad3466648eba38bef7e831d32a8fad4f925bcbc98bab44ac0f98b2e4619437b81&amp;source=constructor" width="100%" height="613" frameborder="0"></iframe>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "php"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>