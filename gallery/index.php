<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "MaxiGallery");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Фотогалерея");
?>
<?$APPLICATION->IncludeComponent(
    "st101:gallery.albums",
    "",
    Array(
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "12",
        "SECTION_SORT" => "ID",
        "SECTION_SORT_PARAM" => "ASC",
        "ELEMENT_SORT" => "ACTIVE_FROM",
        "ELEMENT_SORT_PARAM" => "DESC",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600"
    ),
false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>