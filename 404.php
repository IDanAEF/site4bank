<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Решения для банков | 404");
    $APPLICATION->SetTitle("Решения для банков | 404");
?>
<main class="clients">
    <section class="page__breadcrumbs text_fz16">
        <div class="container">
            <a href="/">Главная</a> \ 404
        </div>
    </section>
    <section class="error404__content page__block big pt0 text_fz18 text_center">
        <div class="top-shadow short"></div>
        <div class="container">
            <h1 class="text_color">404</h1>
            <h2 class="text_fz36 text_upper">Страница не&nbsp;найдена</h2>
            <p>Вы неправильно набрали адрес или&nbsp;такой страницы больше не&nbsp;существует</p>
            <br>
            <a href="/" class="text_fw500 text_underline">Вернуться на&nbsp;главную страницу</a>
        </div>
    </section>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>