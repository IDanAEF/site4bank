<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Решения для банков | Клиенты");
    $APPLICATION->SetTitle("Решения для банков | Клиенты");
?>
<main class="clients">
    <section class="page__breadcrumbs text_fz16">
        <div class="container">
            <a href="/">Главная</a> \ Клиенты
        </div>
    </section>
    <section class="clients__content page__block pt0 pb100 ajax-elems init" data-vis="15" data-block="9" data-type="logos">
        <div class="container">
            <div class="page__title">
                <h1 class="text_fz36 text_color">Наши клиенты</h1>
            </div>
            <div class="home__clients-list ajax-elems-list">
                
            </div>
            <button class="btn text_fz18 ajax-elems-btn">
                <span>Смотреть ещё</span>
            </button>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/reviews.php", [], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "php"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>