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
            <div class="home__promo-text">
                <h1 class="text_fz64 text_upper">Решения для банков</h1>
                <h2>Создание сайтов для банков и финансовых компаний</h2>
                <button class="btn text_fz18">
                    <span>Обсудить проект</span>
                </button>
            </div>
        </div>
    </section>
    <section class="home__clients page__block pb100">
        <div class="container">
            <div class="home__clients-left text_fz18">
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
            <div class="home__clients-right">
                <div class="home__clients-list">
                    <?php
                        $clients = CIBlockElement::GetList(
                            ["SORT" => "ASC"],
                            ['IBLOCK_ID' => 9, 'ACTIVE' => 'Y', 'PROPERTY_PROEKT_VALUE' => 'Y', '!PROPERTY_LOGO' => false],
                            false,
                            ['nPageSize' => 15, 'iNumPage' => 1],
                            ['PROPERTY_LOGO']
                        );

                        while($client = $clients->Fetch()) {
                            ?>
                            <a href="" class="home__clients-item">
                                <img src="<?=CFile::GetPath($client['PROPERTY_LOGO_VALUE'])?>" alt="">
                            </a>
                            <?php
                        }
                    ?>
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
                <div class="home__adv-item">
                    <img src="<?=IMAGES_PATH?>adv1.svg" alt="">
                    Разработчик типовых сайтов для банков
                </div>
                <div class="home__adv-item">
                    <img src="<?=IMAGES_PATH?>adv2.svg" alt="">
                    Разработчик редакций "Банк" для CMS 1С-Битрикс и ABO
                </div>
                <div class="home__adv-item">
                    <img src="<?=IMAGES_PATH?>adv3.svg" alt="">
                    Проведем аудит на актуальность новых трендов
                </div>
                <div class="home__adv-item">
                    <img src="<?=IMAGES_PATH?>adv4.svg" alt="">
                    Интегрируем с автоматизированной банковской системой (АБС)
                </div>
                <div class="home__adv-item">
                    <img src="<?=IMAGES_PATH?>adv5.svg" alt="">
                    Подберем безопасный и надежный хостинг
                </div>
                <div class="home__adv-item">
                    <img src="<?=IMAGES_PATH?>adv6.svg" alt="">
                    Обеспечим полный цикл работ по созданию сайта
                </div>
                <div class="home__adv-item">
                    <img src="<?=IMAGES_PATH?>adv7.svg" alt="">
                    Техническая поддержка сайта без ежемесячной платы
                </div>
                <div class="home__adv-item">
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
                <div class="home__redact-item">
                    <h4>1С-Битрикс:Банк</h4>
                    <p>Платформа с большим функционалом для персонализированной настройки пользователем, без программирования.</p>
                    <p>Сайты на Битриксе устойчивы к взлому. Имеют защищенность от проникновения и вредоносных атак</p>
                    <img src="<?=IMAGES_PATH?>redactions-image1.png" alt="">
                </div>
                <div class="home__redact-item">
                    <h4>ABO.CMS:Банк</h4>
                    <p>Универсальная платформа для разработки и управления интернет-проектами.</p>
                    <p>Обладая модульной структурой, она позволяет гибко подстраиваться под задачи любого интернет-проекта, и предоставляет пользователю широкие возможности по его управлению</p>
                    <img src="<?=IMAGES_PATH?>redactions-image2.png" alt="">
                </div>
            </div>
            <img src="<?=IMAGES_PATH?>redactions.png" alt="" class="home__redact-image">
            <a href="" class="btn text_fz18 home__redact-btn">
                <span>Подробнее</span>
            </a>

            <div class="home__variants text_fz18 text_white">
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
                        <a href="" class="btn white short text_fz18">
                            <span>Сайт на 1С-Битрикс</span>
                        </a>
                        <a href="" class="btn white short text_fz18">
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
                        <a href="" class="btn white short text_fz18">
                            <span>Примеры проектов</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__cases page__block pb100">
        <div class="container">
            <div class="page__block-title">
                <h2 class="text_fz36 text_color">Проекты</h2>
            </div>
            <div class="home__cases-list text_fz15 text_fw300 text_white text_center">
                <?php
                    $cases = CIBlockElement::GetList(
                        ["SORT" => "ASC"],
                        ['IBLOCK_ID' => 9, 'ACTIVE' => 'Y', 'PROPERTY_PROEKT_VALUE' => 'Y', '!PREVIEW_PICTURE' => false],
                        false,
                        ['nPageSize' => 15, 'iNumPage' => 1],
                        ['PROPERTY_PROEKT_ANONS', 'PROPERTY_PROEKT_NAME', 'PREVIEW_PICTURE']
                    );

                    while($case = $cases->Fetch()) {
                        ?>
                        <a href="" class="home__cases-item no-hover">
                            <img src="<?=CFile::GetPath($case['PREVIEW_PICTURE'])?>" alt="" class="img_bg">
                            <div class="text">
                                <span class="text_fz19 text_fw600"><?=$case['PROPERTY_PROEKT_NAME_VALUE']?></span>
                                <?=$case['PROPERTY_PROEKT_ANONS_VALUE']?>
                            </div>
                        </a>
                        <?php
                    }
                ?>
            </div>
            <a href="/cases/" class="btn text_fz18">
                <span>Смотреть все</span>
            </a>
        </div>
    </section>
    <section class="home__news page__block half">
        <div class="container">
            <div class="page__block-title">
                <h2 class="text_fz36 text_color">Новости</h2>
            </div>
            <div class="home__news-list text_fz18 text_center">
                <?php
                    $cases = CIBlockElement::GetList(
                        ["SORT" => "ASC"],
                        ['IBLOCK_ID' => 9, 'ACTIVE' => 'Y', 'PROPERTY_NEWS_VALUE' => 'Y', '!PREVIEW_PICTURE' => false],
                        false,
                        ['nPageSize' => 3, 'iNumPage' => 1],
                        ['NAME', 'PREVIEW_PICTURE']
                    );

                    while($case = $cases->Fetch()) {
                        ?>
                        <a href="" class="home__news-item">
                            <img src="<?=CFile::GetPath($case['PREVIEW_PICTURE'])?>" alt="">
                            <?=$case['NAME']?>
                        </a>
                        <?php
                    }
                ?>
            </div>
            <a href="/news/" class="btn text_fz18">
                <span>Смотреть все</span>
            </a>
        </div>
    </section>
    <section class="home__feedback page__block pt100">
        <div class="container">
            <div class="home__feedback-title">
                <h2 class="text_fz36 text_color">Давайте обсудим ваш проект</h2>
                <span>Оставьте заявку и мы свяжемся с вами в ближайшее время для обсуждения деталей</span>
            </div>
            <form action="" class="home__feedback-form form">
                <div class="form-row">
                    <label class="form-label">
                        <span class="text_fz18 tetx_fw600">Ваше имя</span>
                        <input type="text" name="feedname" placeholder="Иван Иванов" required>
                    </label>
                    <label class="form-label">
                        <span class="text_fz18 tetx_fw600">Телефон</span>
                        <input type="tel" name="feedphone" placeholder="+7 (___) ___-__-__" required>
                    </label>
                    <label class="form-label">
                        <span class="text_fz18 tetx_fw600">Email</span>
                        <input type="email" name="feedemail" placeholder="Email" required>
                    </label>
                    <div class="form-label">
                        <button class="btn text_fz20">
                            <span class="text_fw700">Отправить</span>
                            <img src="<?=IMAGES_PATH?>icons/arrow-small.svg" alt="">
                        </button>
                    </div>
                </div>
                <div class="form-ps text_fz14 text_center">
                    Нажимая «Отправить», вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
                </div>
            </form>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>