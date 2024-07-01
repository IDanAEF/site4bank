<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "Знание специфики разработки и поддержки банковских сайтов, позволяет нам создавать качественные сайты различной сложности и объема. Наш опыт создания сайтов для банков - это более 18 лет и более 30 готовых проектов. На этом сайте вы можете посмотреть наше портфолио, отзывы банков, информацию о разработанной в нашей компании специально для банков CMS и наши контакты");
    $APPLICATION->SetPageProperty("title", "Решения для банков | Создание сайтов для банков и финансовых компаний");
    $APPLICATION->SetTitle("Решения для банков | Создание сайтов для банков и финансовых компаний");
?>
<main class="home">
    <section class="home__promo page__block big text_white">
        <video src="<?=SITE_TEMPLATE_PATH?>/i/topvideo.mp4" autoplay playsinline muted loop class="img_bg"></video>
        <div class="container">
            <div class="home__promo-text elem_animate right">
                <h1 class="text_fz64 text_upper">Решения для банков</h1>
                <h2>Создание сайтов для банков и финансовых компаний</h2>
                <button class="btn text_fz18 body-click-target" data-content="order">
                    <span>Обсудить проект</span>
                </button>
            </div>
        </div>
    </section>
    <section class="home__clients page__block pb100">
        <div class="container">
            <div class="home__clients-left text_fz18 elem_animate right">
                <h3 class="text_fz46 text_fw700 text_upper text_color">БОЛЕЕ 20 ЛЕТ</h3>
                успешной работы по созданию сайтов
                <h3 class="text_fz46 text_fw700 text_upper text_color">30+ ПРОЕКТОВ</h3>
                для банков
                <h3 class="text_fz46 text_fw700 text_upper text_color">ТОП 50</h3>
                в рейтинге лучших разработчиков России
                <h3 class="text_fz46 text_fw700 text_upper text_color">Большой опыт разработки</h3>
                сайтов для банков и финансовых организаций, знание специфики разработки и поддержки банковских сайтов
                <h3 class="text_fz46 text_fw700 text_upper text_color">разработчики специализированных решений</h3>
                «1C-Битрикс: Банк» и «ABO.CMS:Банк», а так же типовых сайтов банков
            </div>
            <div class="home__clients-right ajax-elems init" data-vis="15" data-block="9" data-type="logos">
                <div class="home__clients-list ajax-elems-list">
                    
                </div>
                <a href="/clients/" class="btn text_fz18">
                    <span>Наши клиенты</span>
                </a>
            </div>
        </div>
    </section>
    <section class="home__adv page__block half">
        <div class="container">
            <div class="page__block-title">
                <h2 class="text_fz36 text_color">Почему мы?</h2>
            </div>
            <div class="home__adv-list text_fz18 text_center">
                <div class="home__adv-item elem_animate top">
                    <img src="<?=IMAGES_PATH?>adv1.svg" alt="">
                    Разработчик типовых сайтов для банков
                </div>
                <div class="home__adv-item elem_animate top">
                    <img src="<?=IMAGES_PATH?>adv2.svg" alt="">
                    Разработчик редакций "Банк" для CMS 1С-Битрикс и ABO
                </div>
                <div class="home__adv-item elem_animate top">
                    <img src="<?=IMAGES_PATH?>adv3.svg" alt="">
                    Проведем аудит на актуальность новых трендов
                </div>
                <div class="home__adv-item elem_animate top">
                    <img src="<?=IMAGES_PATH?>adv4.svg" alt="">
                    Интегрируем с автоматизированной банковской системой (АБС)
                </div>
                <div class="home__adv-item elem_animate top">
                    <img src="<?=IMAGES_PATH?>adv5.svg" alt="">
                    Подберем безопасный и надежный хостинг
                </div>
                <div class="home__adv-item elem_animate top">
                    <img src="<?=IMAGES_PATH?>adv6.svg" alt="">
                    Обеспечим полный цикл работ по созданию сайта
                </div>
                <div class="home__adv-item elem_animate top">
                    <img src="<?=IMAGES_PATH?>adv7.svg" alt="">
                    Техническая поддержка сайта без ежемесячной платы
                </div>
                <div class="home__adv-item elem_animate top">
                    <img src="<?=IMAGES_PATH?>adv8.svg" alt="">
                    Опыт продвижения сайтов в поисковиках Яндекс и Google
                </div>
            </div>
        </div>
    </section>
    <section class="home__redact page__block pt100">
        <div class="container">
            <div class="page__block-title">
                <h2 class="text_fz36 text_color">Специализированые редакции для банков</h2>
            </div>
            <div class="home__redact-list default-content">
                <div class="home__redact-item elem_animate right">
                    <h4>1С-Битрикс:Банк</h4>
                    <p>Платформа с большим функционалом для персонализированной настройки пользователем, без программирования.</p>
                    <p>Сайты на Битриксе устойчивы к взлому. Имеют защищенность от проникновения и вредоносных атак</p>
                    <img src="<?=IMAGES_PATH?>redactions-image1.png" alt="">
                </div>
                <div class="home__redact-item elem_animate left">
                    <h4>ABO.CMS:Банк</h4>
                    <p>Универсальная платформа для разработки и управления интернет-проектами.</p>
                    <p>Обладая модульной структурой, она позволяет гибко подстраиваться под задачи любого интернет-проекта, и предоставляет пользователю широкие возможности по его управлению</p>
                    <img src="<?=IMAGES_PATH?>redactions-image2.png" alt="">
                </div>
            </div>
            <img src="<?=IMAGES_PATH?>redactions.png" alt="" class="home__redact-image elem_animate top">
            <a href="/bank-cms/" class="btn text_fz18 home__redact-btn">
                <span>Подробнее</span>
            </a>

            <div class="home__variants text_fz18 text_white elem_animate bott">
                <div class="home__variants-title text_center">
                    <h3>Варианты разработки</h3>
                    <p>Наша компания создала типовые сайты с базовым функционалом для быстрого запуска проекта и занимается разработкой индивидуальных комплексных проектов</p>
                </div>
                <div class="home__variants-block">
                    <div class="home__variants-text">
                        <h3>Типовой сайт банка</h3>
                        <p>Шаблон сайта с базовым функционалом на платформах 1С-Битрикс и ABO.CMS, созданный с соблюдением всех требований российского законодательства, для максимально быстрого запуска</p>
                    </div>
                    <div class="home__variants-btns">
                        <a href="https://bitrix.site4bank.ru/" class="btn white short text_fz18" target="_blank">
                            <span>Сайт на 1С-Битрикс</span>
                        </a>
                        <a href="https://cms.site4bank.ru/" class="btn white short text_fz18" target="_blank">
                            <span>Сайт на ABO.CMS</span>
                        </a>
                    </div>
                </div>
                <div class="home__variants-block">
                    <div class="home__variants-text">
                        <h3>Индивидуальная разработка</h3>
                        <p>Создание сложных многофункциональных веб-систем, задействующий передовые технологии, для персонализации сайта вашего банка</p>
                    </div>
                    <div class="home__variants-btns">
                        <a href="/cases/" class="btn white short text_fz18">
                            <span>Примеры проектов</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/cases.php", ['dopPd' => 'pb100', 'vis' => 15], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/reviews.php", [], ["MODE" => "php"]) ?>
    <section class="home__get page__block pt100">
        <div class="container">
            <div class="home__get-title page__block-title text_fz18 elem_animate right">
                <h2 class="text_fz36 text_color">Cоответствует ли ваш сайт банка современным требованиям?</h2>
                <p>Получите бесплатно чек-лист для проверки сайта и/или наше исследование «Тренды банковских сайтов» и узнайте соответствует ли ваш сайт банка современным требованиям.</p>
            </div>
            <form action="/ajax/forms.php" class="home__get-list form text_white elem_animate bott" data-success="save">
                <input type="text" name="feedsection" value="3" hidden>
                <input type="text" name="feedtheme" value="Запрос чек-листа" hidden>

                <div class="home__get-text">
                    <h4>Оставьте email и мы вышлем вам файл</h4>
                    <div class="form-checks text_fz18 text_fw600">
                        <h6>Что вы хотите получить?</h6>
                        <label class="form-checks-item">
                            <input type="checkbox" name="feedget[0]" value="Чек-лист современного сайта банка">
                            <div class="dot"></div>
                            <span>Чек-лист современного сайта банка</span>
                        </label>
                        <label class="form-checks-item">
                            <input type="checkbox" name="feedget[1]" value="Тренды современных банковских сайтов">
                            <div class="dot"></div>
                            <span>Тренды современных банковских сайтов</span>
                        </label>
                    </div>
                </div>
                <div class="home__get-fields">
                    <label class="form-label">
                        <input type="text" name="feedname" placeholder="Имя" required>
                    </label>
                    <label class="form-label">
                        <input type="email" name="feedemail" placeholder="Email" required>
                    </label>
                    <div class="form-label">
                        <button class="btn text_fz20 white">
                            <span>Отправить</span>
                            <img src="<?=IMAGES_PATH?>icons/arrow-small.svg" alt="">
                        </button>
                    </div>
                    <div class="form-ps text_fz12 text_center">
                        Нажимая «Отправить», вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="home__materials page__block pb100">
        <div class="container">
            <div class="page__block-title">
                <h2 class="text_fz36 text_color">Материалы о нас</h2>
            </div>
            <div class="home__materials-list">
                <div class="home__materials-item elem_animate right">
                    <img src="<?=IMAGES_PATH?>materials1.svg" alt="">
                    <h4>Решения для банков</h4>
                    <a href="/site4bank.pdf" class="btn text_fz18" target="_blank">
                        <span>Смотреть</span>
                    </a>
                </div>
                <div class="home__materials-item elem_animate left">
                    <img src="<?=IMAGES_PATH?>materials2.svg" alt="">
                    <h4>Портфолио</h4>
                    <a href="/upload/iblock/69e/zqpyz7qznok0k1gtm75fyuv7bd4pa1tu.pdf" class="btn text_fz18" target="_blank">
                        <span>Смотреть</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="home__news page__block half ajax-elems init" data-vis="3" data-block="9" data-type="news">
        <div class="container">
            <div class="page__block-title">
                <h2 class="text_fz36 text_color">Новости</h2>
            </div>
            <div class="home__news-list text_fz18 text_center ajax-elems-list">
                
            </div>
            <a href="/news/" class="btn text_fz18">
                <span>Смотреть все</span>
            </a>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "php"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>