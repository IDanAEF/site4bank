<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

    CModule::IncludeModule("iblock");
    CModule::IncludeModule("mail");

    // $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    // $recaptcha_secret = '6Lfb33QpAAAAAAfY0btX98vkpwXf5Gxf-C9eX9EF';
    // $recaptcha_response = $_POST['recaptcha'];
    
    // $ch = curl_init();
    // curl_setopt_array($ch, [
    //     CURLOPT_URL => $recaptcha_url,
    //     CURLOPT_POST => true,
    //     CURLOPT_POSTFIELDS => [
    //         'secret' => $recaptcha_secret,
    //         'response' => $recaptcha_response,
    //         'remoteip' => $_SERVER['REMOTE_ADDR']
    //     ],
    //     CURLOPT_RETURNTRANSFER => true
    // ]);
    // $output = curl_exec($ch);
    // curl_close($ch);

    // $recaptcha = json_decode($output);

    // if (!($recaptcha->success == true && $recaptcha->score >= 0.6)) {
    //     echo "Не пройдена проверка Recaptcha; score: ".$recaptcha->score;
    //     die();
    // }

    $fields = [
        'feedname' => 'Имя',
        'feedphone' => 'Телефон',
        'feedemail' => 'E-mail',
        'feedcomment' => 'Комментарий'
    ];

    $body = '';

    if (isset($_POST['feedtheme'])) $body .= "Тема: ".$_POST['feedtheme']."\n\n";

    foreach ($fields as $name => $descr) {
        if ($_POST[$name]) $body .= $descr." - ".$_POST[$name]."\n";
    }

    $gets = '';

    if (isset($_POST['feedget'])) {
        $gets .= "\n\nЧто получить:";

        foreach($_POST['feedget'] as $getItem) {
            $gets .= "\n".$getItem;
        }
    }

    $body .= $gets;

    $el = new CIBlockElement;
    $arProps = Array(
        "IBLOCK_ID" => 11,
        "IBLOCK_SECTION_ID" => $_POST['feedsection'],
        "PROPERTY_VALUES" => [12 => $body],
        "NAME" => $_POST['feedname'] ?: $_POST['feedphone'],
        "ACTIVE" => "Y",
    );
    $elemId = $el->Add($arProps);

    $eventFields = [];
    $eventFields['FEEDELEM'] = $elemId;
    $eventFields['FEEDTHEME'] = $_POST['feedtheme'];
    $eventFields['FEEDGET'] = $gets;
    foreach ($_POST as $key => $value) {
        if ($key != 'feedevent') $eventFields[mb_strtoupper($key)] = $value;
    }

    print_r($_POST);

    CEvent::Send('GLOBAL_FORM_FEED', 's1', $eventFields, "Y", 91);

    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>