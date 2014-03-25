<?
Class gallery101 extends CModule
{
var $MODULE_ID = "st101.gallery101";
var $MODULE_VERSION;
var $MODULE_VERSION_DATE;
var $MODULE_NAME = "studio 101 – модуль галереи";
var $MODULE_DESCRIPTION;
var $MODULE_CSS;

function gallery101()
{
    echo 'hi';
    $arModuleVersion = array();
    $path = str_replace("\\", "/", __FILE__);
    $path = substr($path, 0, strlen($path) - strlen("/index.php"));
    include($path."/version.php");

    if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
    {
    $this->MODULE_VERSION = $arModuleVersion["VERSION"];
    $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
    }
    $this->MODULE_NAME = "studio 101 – модуль галереи";
    $this->MODULE_DESCRIPTION = "После установки вы сможете пользоваться компонентом st101:gallery.albums";
}

function InstallFiles($arParams = array())
{
    CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/gallery101/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
    return true;
}

function UnInstallFiles()
{
    DeleteDirFilesEx("/bitrix/components/st101");
    return true;
}

function DoInstall()
{
    global $DOCUMENT_ROOT, $APPLICATION;
    $this->InstallFiles();
    RegisterModule("gallery101");
    $APPLICATION->IncludeAdminFile("Установка модуля галереи от Студии 101", $DOCUMENT_ROOT."/bitrix/modules/gallery101/install/step.php");
}

function DoUninstall()
{
    global $DOCUMENT_ROOT, $APPLICATION;
    $this->UnInstallFiles();
    UnRegisterModule("gallery101");
    $APPLICATION->IncludeAdminFile("Деинсталляция модуля модуля галереи от Студии 101", $DOCUMENT_ROOT."/bitrix/modules/gallery101/install/unstep.php");
}

}
?>