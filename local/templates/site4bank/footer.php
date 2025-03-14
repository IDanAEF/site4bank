<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
    <footer class="footer text_white text_fz16">
        <div class="container">
            <div class="footer__top">
                <ul class="footer__menu text_fz20 text_upper text_fw600">
                    <li><a href="/clients/" class="no-hover">Клиенты</a></li>
                    <li><a href="/cases/" class="no-hover">проекты</a></li>
                </ul>
                <ul class="footer__menu text_fz20 text_upper text_fw600">
                    <li><a href="/bank-cms/" class="no-hover">CMS для банков</a></li>
                    <li><a href="/news/" class="no-hover">новости</a></li>
                </ul>
                <div class="footer__social text_fz14">
                    <a href="https://join.skype.com/invite/diCzxMjPi63M" target="_blank" class="no-hover">
                        <img src="<?=IMAGES_PATH?>icons/skype.svg" alt="">
                        Skype
                    </a>
                    <a href="https://t.me/TG1CPoly_bot" target="_blank" class="no-hover">
                        <img src="<?=IMAGES_PATH?>icons/telegram.svg" alt="">
                        Telegram
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=79858195517" target="_blank" class="no-hover">
                        <img src="<?=IMAGES_PATH?>icons/whatsapp.svg" alt="">
                        WhatsApp
                    </a>
                </div>
                <div class="footer__contacts text_fz18">
                    <a href="/contacts/" class="text_fz20 text_upper text_fw600 no-hover">контакты</a>
                    <a href="tel:+74955850659" class="no-hover">
                        <img src="<?=IMAGES_PATH?>icons/phone.svg" alt="">
                        +7 (495) 585-06-59
                    </a>
                    <a href="mailto:info@armex.ru" class="no-hover">
                        <img src="<?=IMAGES_PATH?>icons/mail.svg" alt="">
                        info@armex.ru
                    </a>
                    <a href="https://yandex.ru/maps/-/CDrcbWJW" class="no-hover" target="_blank">
                        <img src="<?=IMAGES_PATH?>icons/map-point.svg" alt="">
                        г. Москва, Марксистская улица, 34&nbsp;к4
                    </a>
                </div>
            </div>
            <div class="footer__bott">
                <div class="footer__line">
                    <a href="/" class="footer__logo">
                        <img src="<?=IMAGES_PATH?>logo.svg" alt="">
                    </a>
                    <div class="footer__pay">
                        <span>Принимаем к оплате</span>
                        <div class="pays">
                            <img src="<?=IMAGES_PATH?>pay1.png" alt="">
                            <img src="<?=IMAGES_PATH?>pay2.png" alt="">
                            <img src="<?=IMAGES_PATH?>pay3.png" alt="">
                            <img src="<?=IMAGES_PATH?>pay4.png" alt="">
                        </div>
                    </div>
                    <div class="footer__link">
                        <a href="/privacy/" class="no-hover">
                            Политика конфиденциальности
                        </a>
                        <a href="#" class="no-hover body-click-target" data-content="error">
                            Сообщить об ошибке
                        </a>
                    </div>
                </div>
                <div class="footer__copy text_fz14">
                    <?php $APPLICATION->IncludeFile(SITE_DIR."include/copy.php", [], ["MODE" => "php"]) ?>
                </div>
            </div>
        </div>
    </footer>

    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/modal-form.php", [
            'title' => 'Давайте обсудим ваш проект',
            'descr' => 'Оставьте заявку и мы свяжемся с вами в ближайшее время для обсуждения деталей',
            'success' => 'save',
            'type' => 'order',
            'section' => 1
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/modal-form.php", [
            'title' => 'Сообщить об ошибке',
            'descr' => '',
            'success' => 'error',
            'type' => 'error',
            'section' => 2
        ], ["MODE" => "php"]);
    ?>

    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/success-modal.php", [
            'title' => 'Данные сохранены',
            'descr' => 'Ваши заявка успешно сохранена, и мы свяжемся с вами в ближайшее время',
            'name' => 'save'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/success-modal.php", [
            'title' => 'Спасибо',
            'descr' => 'Мы уже получили ваше сообщение и&nbsp;приступили к исправлению ошибки',
            'name' => 'error'
        ], ["MODE" => "php"]);
    ?>

    <?php if (!isset($_COOKIE['cookie_agree'])) : ?>
        <div class="modal__cookie modal__item text_fz18">
            <span>
                Мы используем <strong>cookies</strong>. Продолжая использовать наш сайт, вы соглашаетесь на обработку <a href="/privacy/" class="text_underline">персональных данных</a>.
            </span>
            <button class="btn">
                <span>Согласен</span>
            </button>
        </div>
    <?php endif; ?>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter8121643 = new Ya.Metrika({
                        id:8121643,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/8121643" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <script>
        (function(w,d,u){
                        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b2995039/crm/site_button/loader_4_io307s.js');
    </script>
</body>
</html>