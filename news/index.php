<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Решения для банков | Новости");
    $APPLICATION->SetTitle("Решения для банков | Новости");
?>
<main class="news">
    <section class="page__breadcrumbs text_fz16">
        <div class="container">
            <a href="/">Главная</a> \ Новости
        </div>
    </section>
    <section class="home__news page__block pt0 ajax-elems init" data-vis="3" data-block="9" data-type="news">
        <div class="container">
            <div class="page__title">
                <h1 class="text_fz36 text_color">Новости</h1>
            </div>
            <div class="home__news-list big text_fz18 text_center ajax-elems-list">
                
            </div>
            <button class="btn text_fz18 ajax-elems-btn">
                <span>Смотреть ещё</span>
            </button>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "php"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>