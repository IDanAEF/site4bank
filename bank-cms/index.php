<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Решения для банков | CMS для банков");
    $APPLICATION->SetTitle("Решения для банков | CMS для банков");
?>
<main class="cms">
    <section class="page__breadcrumbs text_fz16">
        <div class="container">
            <a href="/">Главная</a> \ CMS для банков
        </div>
    </section>
    <section class="cms__top text_fz18 elem_animate right">
        <div class="container">
            <h1 class="text_color">CMS для&nbsp;банков</h1>
            <p>Мы разработали специализированные решения <br>«1С-Битрикс:Банк» и&nbsp;«ABO.CMS:Банк», а&nbsp;также типовые сайты банков</p>
            <div class="cms__top-btns text_fz16">
                <a href="#bitrix1c" class="btn reverse">
                    <span>1С-Битрикс</span>
                </a>
                <a href="#abocms" class="btn reverse">
                    <span>ABO.CMS</span>
                </a>
            </div>
        </div>
    </section>
    <section class="cms__blocks">
        <div class="container">
            <div class="cms__block page__block" id="bitrix1c">
                <div class="cms__block-info">
                    <div class="cms__block-text text_fz18 styled-ul elem_animate right">
                        <h4>1С-Битрикс</h4>
                        <ul>
                            <li>Сайты на&nbsp;Битриксе устойчивы к&nbsp;взлому. Имеют защищенность от проникновения, вредоносных атак</li>
                            <li>Большое количество документации по работе с CMS</li>
                            <li>Большой функционал платформы. Блоки сайта могут настраиваться в&nbsp;визуальном режиме опытным пользователем, без программирования</li>
                            <li>Годовая подписка на&nbsp;бесплатное техобслуживание</li>
                        </ul>
                        <a href="https://armexdesign.ru/solutions/bitrix/" class="btn text_fz16" target="_blank">
                            <span>Подробнее </span>
                        </a>
                    </div>
                    <img src="<?=IMAGES_PATH?>cms1.png" alt="" class="cms__block-image elem_animate left">
                </div>
                <div class="cms__block-modules text_fz18 elem_animate top">
                    <h4>Банковские модули</h4>
                    <div class="cms__block-modules-row styled-ul">
                        <div class="cms__block-modules-col">
                            <ul>
                                <li>Офисы и&nbsp;Банкоматы (Яндекс.Карта)</li>
                                <li>Библиотека документов (для финансовой отчетности)</li>
                                <li>Курсы валют</li>
                                <li>Депозитный калькулятор</li>
                            </ul>
                        </div>
                        <div class="cms__block-modules-col">
                            <ul>
                                <li>Калькулятор для потребительского кредитования</li>
                                <li>Калькулятор для автокредитования</li>
                                <li>Калькулятор для ипотечного кредитования</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="home__variants text_fz18 text_white elem_animate bott">
                    <div class="home__variants-block center">
                        <div class="home__variants-text">
                            <h3>Хотите узнать, как будет <br>выглядеть сайт вашего банка?</h3>
                            <p>Мы подготовили демоверсии сайта для представления типового функционала. Возможности веб-системы могут быть расширены при&nbsp;разработке индивидуального проекта про&nbsp;вашу компанию</p>
                        </div>
                        <div class="home__variants-btns">
                            <a href="" class="btn white short text_fz18" target="_blank">
                                <span>Сайт на 1С-Битрикс</span>
                            </a>
                            <a href="" class="btn white short text_fz18" target="_blank">
                                <span>Сайт на ABO.CMS</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cms__block page__block" id="abocms">
                <div class="cms__block-info">
                    <div class="cms__block-text text_fz18 styled-ul elem_animate right">
                        <h4>ABO.CMS</h4>
                        <ul>
                            <li>Более 2 000 сайтов работающих на&nbsp;системе</li>
                            <li>Более 100 компаний, разрабатывающих сайты на&nbsp;ABO.CMS</li>
                            <li>Удобный интерфейс</li>
                            <li>Безопасность</li>
                            <li>Широкие возможности</li>
                            <li>Система разграничений доступа</li>
                            <li>Коробочный продукт</li>
                        </ul>
                        <a href="https://cms.site4bank.ru/" class="btn text_fz16" target="_blank">
                            <span>Подробнее </span>
                        </a>
                    </div>
                    <img src="<?=IMAGES_PATH?>cms2.png" alt="" class="cms__block-image elem_animate left">
                </div>
                <div class="cms__block-modules text_fz18 elem_animate top">
                    <h4>Модули</h4>
                    <div class="cms__block-modules-row triple styled-ul">
                        <div class="cms__block-modules-col">
                            <span class="text_fz20">Работа с&nbsp;контентом</span>
                            <ul>
                                <li>Новости</li>
                                <li>Статьи</li>
                                <li>Баннеры</li>
                                <li>Формы обратной связи</li>
                                <li>Вопросы и&nbsp;ответы</li>
                            </ul>
                        </div>
                        <div class="cms__block-modules-col">
                            <span class="text_fz20">Работа с&nbsp;контентом</span>
                            <ul>
                                <li>Офисы и&nbsp;банкоматы на&nbsp;карте Yandex</li>
                                <li>Библиотека документов</li>
                                <li>Система статистики посещаемости</li>
                                <li>Система HelpDesk для поддержки клиентов</li>
                            </ul>
                        </div>
                        <div class="cms__block-modules-col">
                            <span class="text_fz20">Работа с&nbsp;контентом</span>
                            <ul>
                                <li>На потребительский кредит</li>
                                <li>На ипотечный кредит</li>
                                <li>По вкладам</li>
                                <li>Кредит на автомобиль</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="home__variants text_fz18 text_white elem_animate bott">
                    <div class="home__variants-block center">
                        <div class="home__variants-text">
                            <h3>Хотите узнать, как будет <br>выглядеть сайт вашего банка?</h3>
                            <p>Мы подготовили демоверсии сайта для представления типового функционала. Возможности веб-системы могут быть расширены при&nbsp;разработке индивидуального проекта про&nbsp;вашу компанию</p>
                        </div>
                        <div class="home__variants-btns">
                            <a href="https://bitrix.site4bank.ru/" class="btn white short text_fz18" target="_blank">
                                <span>Сайт на 1С-Битрикс</span>
                            </a>
                            <a href="https://demo.site4bank.ru/" class="btn white short text_fz18" target="_blank">
                                <span>Сайт на ABO.CMS</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/cases.php", ['dopPd' => 'pb0', 'vis' => 6], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "php"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>