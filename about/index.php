<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('О Нас');

$APPLICATION->SetPageProperty("TITLE", "О Нас");
$APPLICATION->SetPageProperty("keywords", "о нас, о компании, we coders");
$APPLICATION->SetPageProperty("description", "О нашей компании");

?>
<?= 'DESCRIPTION = ' . $APPLICATION->GetPageProperty('description') ?>
    <p>Это текст О НАС</p>
    <p><a href="https://www.youtube.com/playlist?list=PL8Kt1m2oRch5M1bA334BRwFybdDe38Byd">Создание сайта на 1С Битрикс (видеокурс)</a></p>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>