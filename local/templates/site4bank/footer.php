<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
    <footer class="footer text_white text_fz16">
        <div class="container">
            <div class="footer__top">
                <ul class="footer__menu text_fz20 text_upper text_fw600">
                    <li><a href="/clients/" class="no-hover">Нам доверяют</a></li>
                    <li><a href="/cases/" class="no-hover">проекты</a></li>
                </ul>
                <ul class="footer__menu text_fz20 text_upper text_fw600">
                    <li><a href="/bank-cms/" class="no-hover">CMS для банков</a></li>
                    <li><a href="/news/" class="no-hover">новости</a></li>
                </ul>
                <div class="footer__social text_fz14">
                    <a href="" target="_blank" class="no-hover">
                        <img src="<?=IMAGES_PATH?>icons/skype.svg" alt="">
                        Skype
                    </a>
                    <a href="" target="_blank" class="no-hover">
                        <img src="<?=IMAGES_PATH?>icons/telegram.svg" alt="">
                        Telegram
                    </a>
                    <a href="" target="_blank" class="no-hover">
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
                        <img src="<?=IMAGES_PATH?>pay1.png" alt="">
                        <img src="<?=IMAGES_PATH?>pay2.png" alt="">
                        <img src="<?=IMAGES_PATH?>pay3.png" alt="">
                        <img src="<?=IMAGES_PATH?>pay4.png" alt="">
                    </div>
                    <div class="footer__link">
                        <a href="/privacy/" class="no-hover">
                            Политика конфиденциальности
                        </a>
                        <a href="#" class="no-hover">
                            Сообщить об ошибке
                        </a>
                    </div>
                </div>
                <div class="footer__copy text_fz14">
                    © Site4Bank, ООО «АПП» 1999-<?=date('Y')?> <br>
                    Все права защищены. Все торговые марки являются собственностью их правообладателей.
                </div>
            </div>
        </div>
    </footer>
</body>
</html>