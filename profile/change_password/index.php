<?$IsAjax = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' || !empty($_REQUEST['year']);
if ($IsAjax):
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
else:
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Изменение пароля");
	//define("NEED_AUTH","true"); 
endif;?>


<?$APPLICATION->IncludeComponent(
	"renart:main.profile.change_password", 
	"ans", 
	array(
		
	),
	false
);?>


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