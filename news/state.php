<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

    $assetInstance->addCss(SITE_TEMPLATE_PATH."/assets/css/custom-old.css");

    $newsCode = str_replace('/', '', $_GET['newsCode']);

    $newsItem = CIBlockElement::GetList(
        [],
        ['IBLOCK_ID' => 9, 'CODE' => $newsCode],
        false,
        false,
        [
            'ID', 'NAME', 'DETAIL_PICTURE', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'DETAIL_TEXT', 
            'PROPERTY_CASE', 'PROPERTY_REMOVE_H1'
        ]
    )->Fetch();

    if (!$newsItem) {
        if (!defined("ERROR_404")) define("ERROR_404", "Y");

        \CHTTP::setStatus("404 Not Found");
        
        if ($APPLICATION->RestartWorkarea()) {
            require(\Bitrix\Main\Application::getDocumentRoot()."/404.php");
            die();
        }
    }

    $custom = $newsItem['PROPERTY_REMOVE_H1_VALUE'];

    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", $newsItem['NAME']);
    $APPLICATION->SetTitle($newsItem['NAME']);
?>
<div class="state-wrap">
    <section class="page__breadcrumbs text_fz16">
        <div class="container">
            <a href="/">Главная</a> \ <a href="/news/">Новости</a> \ <?=$newsItem['NAME']?>
        </div>
    </section>
    <?php if (!$custom) : ?>
        <div class="news-detail<?=$newsItem['PROPERTY_CASE_VALUE'] ? ' case' : ' news'?>">
    <?php endif; ?>
        <?php if (!$custom) : ?>
            <h1 class="clients-title revealator-zoomin revealator-delay1 revealator-duration8 revealator-once revealator-within">
                <?=$newsItem['NAME']?>
            </h1>
        <?php endif; ?>
        <?php if ($newsItem['PREVIEW_TEXT']) : ?>
            <p><?=$newsItem['PREVIEW_TEXT']?></p>
        <?php endif; ?>
        <?=$newsItem['DETAIL_TEXT']?>
    <?php if (!$custom) : ?>
        </div>
    <?php endif; ?>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>