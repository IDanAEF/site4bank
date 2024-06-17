<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Решения для банков | Проекты");
    $APPLICATION->SetTitle("Решения для банков | Проекты");
?>
<main class="cases">
    <section class="page__breadcrumbs text_fz16">
        <div class="container">
            <a href="/">Главная</a> \ Проекты
        </div>
    </section>
    <section class="home__cases page__block pt0 pb100 ajax-elems init" data-vis="15" data-block="9">
        <div class="container">
            <div class="page__title">
                <h1 class="text_fz36 text_color">Наши проекты</h1>
            </div>
            <div class="home__cases-list text_fz15 text_fw300 text_white text_center ajax-elems-list">
                
            </div>
            <button class="btn text_fz18 ajax-elems-btn">
                <span>Смотреть ещё</span>
            </button>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/reviews.php", [], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [
        'pt100' => true
    ], ["MODE" => "php"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>