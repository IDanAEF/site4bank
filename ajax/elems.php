<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

    CModule::IncludeModule("iblock");

    $filter = ['IBLOCK_ID' => $_POST['block']];
    $select = ['NAME', 'PREVIEW_PICTURE'];

    if ($_POST['block'] == 9) {
        $filter['ACTIVE'] = 'Y';
        $filter['PROPERTY_PROEKT_VALUE'] = 'Y';
        $filter['!PREVIEW_PICTURE'] = false;

        $select[] = 'PROPERTY_PROEKT_ANONS';
        $select[] = 'PROPERTY_PROEKT_NAME';
    }

    if ($_POST['type'] == 'news') {
        $filter = ['IBLOCK_ID' => $_POST['block'], 'ACTIVE' => 'Y', 'PROPERTY_NEWS_VALUE' => 'Y', '!PREVIEW_PICTURE' => false];
    }

    if ($_POST['type'] == 'logos') {
        $filter = ['IBLOCK_ID' => $_POST['block'], 'ACTIVE' => 'Y', 'PROPERTY_PROEKT_VALUE' => 'Y', '!PROPERTY_LOGO' => false];

        $select[] = 'PROPERTY_LOGO';
    }

    $blocks = CIBlockElement::GetList(
        ["SORT" => "ASC"],
        $filter,
        false,
        ['nPageSize' => $_POST['vis'], 'iNumPage' => $_POST['page']],
        $select
    );

    while($block = $blocks->Fetch()) {
        if ($_POST['type'] == 'logos') {
            ?>
            <a href="" class="home__clients-item ajax-elems-item">
                <img src="<?=CFile::GetPath($block['PROPERTY_LOGO_VALUE'])?>" alt="">
            </a>
            <?php
        } else if ($_POST['type'] == 'news') {
            ?>
            <a href="" class="home__news-item ajax-elems-item">
                <img src="<?=CFile::GetPath($block['PREVIEW_PICTURE'])?>" alt="">
                <?=$block['NAME']?>
            </a>
            <?php
        } else if ($_POST['block'] == 9) {
            ?>
            <a href="" class="home__cases-item no-hover ajax-elems-item">
                <img src="<?=CFile::GetPath($block['PREVIEW_PICTURE'])?>" alt="" class="img_bg">
                <div class="text">
                    <span class="text_fz19 text_fw600"><?=$block['PROPERTY_PROEKT_NAME_VALUE']?></span>
                    <?=$block['PROPERTY_PROEKT_ANONS_VALUE']?>
                </div>
            </a>
            <?php
        }
    }

    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>