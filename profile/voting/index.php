<?$IsAjax = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' || !empty($_REQUEST['year']);
if ($IsAjax):
	require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
else:
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Голосование");
endif;
/*
global $USER;
if ($USER->GetID()) {
	$rsUser = CUser::GetByID($USER->GetID());
	$arUser = $rsUser->Fetch();
	$photo = CFile::ResizeImageGet($arUser["PERSONAL_PHOTO"], array('width'=>220, 'height'=>220), BX_RESIZE_IMAGE_EXACT, true);
	CModule::includeModule("iblock");
} else {
	localRedirect("/");
}
*/
global $USER;
if (!$USER->IsAdmin()) {
echo localRedirect("/profile/registration/");
}

?>

<?if(STATE == "VOTING"):?>
<?
global $USER;
	if ($USER->GetID()) {
		$rsUser = CUser::GetByID($USER->GetID());
		$arUser = $rsUser->Fetch();
		$photo = CFile::ResizeImageGet($arUser["PERSONAL_PHOTO"], array('width'=>220, 'height'=>220), BX_RESIZE_IMAGE_EXACT, true);
	} else {
		localRedirect("/");
	}
?>
<?elseif(STATE == "REGISTRATION"):?>
	<?localRedirect("/profile/");?>
<?endif;?>



<div class="voting-load-content">
<?$APPLICATION->IncludeComponent(
	"xinoz:users", 
	".default", 
	array(
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/profile/voting/",
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_URL_TEMPLATES" => array(
			"users" => "",
			"group" => "#GROUP_ID#/",
			"detail" => "#GROUP_ID#/#USER_ID#/",
		)
	),
	false
);?>
</div>



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