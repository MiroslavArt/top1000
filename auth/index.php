<?$IsAjax = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' || !empty($_REQUEST['year']);
if ($IsAjax):
	require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
else:
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Регистрация");
	//define("NEED_AUTH","true"); 
endif;?>

<?
/*
if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
?>
<p>Вы зарегистрированы и успешно авторизовались.</p>
 
<p>Используйте административную панель в верхней части экрана для быстрого доступа к функциям управления структурой и информационным наполнением сайта. Набор кнопок верхней панели отличается для различных разделов сайта. Так отдельные наборы действий предусмотрены для управления статическим содержимым страниц, динамическими публикациями (новостями, каталогом, фотогалереей) и т.п.</p>
 
<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>
*/?>

<?if($_REQUEST["AUTH"]=="Y"):?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
								"formAjax",
								Array(
									"REGISTER_URL" => "register.php",
									"FORGOT_PASSWORD_URL" => "",
									"PROFILE_URL" => "profile.php",
									"SHOW_ERRORS" => "Y"
								)
	);?>
<?endif;?>

<?if($_REQUEST["FORGOT"]):?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
								"formAjax",
								Array(
									"REGISTER_URL" => "register.php",
									"FORGOT_PASSWORD_URL" => "",
									"PROFILE_URL" => "profile.php",
									"SHOW_ERRORS" => "Y"
								)
	);?>
	<?$APPLICATION->includeComponent("bitrix:system.auth.forgotpasswd","ajax")?>

<?endif;?>

<?if($_REQUEST["CHANGE_PWD"]):?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
								"formAjax",
								Array(
									"REGISTER_URL" => "register.php",
									"FORGOT_PASSWORD_URL" => "",
									"PROFILE_URL" => "profile.php",
									"SHOW_ERRORS" => "Y"
								)
	);?>
	<?$APPLICATION->includeComponent("bitrix:system.auth.changepasswd","ajax")?>

<?endif;?>
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