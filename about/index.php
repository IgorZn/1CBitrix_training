<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('О Нас');

$APPLICATION->SetPageProperty("TITLE", "О Нас");
$APPLICATION->SetPageProperty("keywords", "о нас, о компании, we coders");
$APPLICATION->SetPageProperty("description", "О нашей компании");

?>
<?= 'DESCRIPTION = ' . $APPLICATION->GetPageProperty('description') ?>
    <p>Это текст О НАС</p>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>