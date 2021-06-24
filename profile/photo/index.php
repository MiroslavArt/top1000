<?$IsAjax = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' || !empty($_REQUEST['year']);
if ($IsAjax):
	require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
else:
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Изменение фото");
	//define("NEED_AUTH","true"); 
endif;?>
<?
if ($USER->GetID()) {

} else {
	localRedirect("/");
}
?>


<?$APPLICATION->includeComponent("renart:main.profile.photo","asd");?>
<?
if ($IsAjax)
{
	require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
}
else
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); 
}
?>