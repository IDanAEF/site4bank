<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Политика в отношении обработки персональных данных");
    $APPLICATION->SetTitle("Политика в отношении обработки персональных данных");
?>
<main class="page">
    <section class="page__breadcrumbs text_fz16">
        <div class="container">
            <a href="/">Главная</a> \ <?php $APPLICATION->ShowTitle() ?>
        </div>
    </section>
    <section class="page__block pt0 default-content text_fz18">
        <div class="container">
            <div class="page__title">
                <h1 class="text_fz36 text_color"><?php $APPLICATION->ShowTitle() ?></h1>

                <?php $APPLICATION->IncludeFile(SITE_DIR."include/privacy.php", [], ["MODE" => "html"]) ?>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "php"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>