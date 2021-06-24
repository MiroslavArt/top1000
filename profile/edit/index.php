<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мой Профиль");
global $USER;
if ($USER->GetID()) {
	//localRedirect("/profile/");

    $grUser = CUser::GetByID($USER->GetID());
    $arGroups = CUser::GetUserGroup($USER->GetID());
    $arsUser = $grUser->Fetch();


    if ($_GET['USER_PROF']){
       if ($USER->GetID()  && in_array('7' , $arGroups)) {
           $rsUser = CUser::GetByID($_GET['USER_PROF']);
           $arUser = $rsUser->Fetch();
           if ($arsUser['WORK_COMPANY'] != $arUser['WORK_COMPANY']) {
               $arUser = 0;
           }
       }



    } else {
        $rsUser = CUser::GetByID($USER->GetID());
        $arUser = $rsUser->Fetch();
    }

	$photo = CFile::ResizeImageGet($arUser["PERSONAL_PHOTO"], array('width'=>220, 'height'=>220), BX_RESIZE_IMAGE_EXACT, true);
	//$arPhoto = CFile::GetByID($arUser["PERSONAL_PHOTO"]);
	//$photo = $arPhoto->Fetch();
	//echo "<pre>"; print_r($arUser); echo "</pre>";
	//echo "<pre>"; print_r($photo); echo "</pre>";
	CModule::includeModule("iblock");
} else {
	localRedirect("/");
}
if(STATE == "VOTING") {
	localRedirect("/profile/"); 
}
//localRedirect("/profile/");
?>
<div class="profile-header clearfix">
	<div class="pic">
			<?if($photo["src"]):?>
							<img src="<?=$photo["src"];?>" />
							<?else:?>
							<img src="/images/nopic.jpg" />
							<?endif;?>
	</div>
	<div class="descr">
							<div class="profile-name">
								<?=$arUser["LAST_NAME"];?> <?=$arUser["NAME"];?>  <?=$arUser["SECOND_NAME"];?>
							</div>
							<div class="profile-email">
								<?=$arUser["EMAIL"];?>
							</div>
		<div class="profile-controls">
		<a href="javascript:void();" class="profile-data-link act"><span>Редактировать личные данные</span></a><br>
		<a href="javascript:void();" class="profile-photo-link profile-popup-link"><span>Добавить / изменить фото</span></a><br>
		<a href="javascript:void();" class="profile-pass-link profile-popup-link"><span>Изменить пароль</span></a>
		</div>
	</div>
</div>
			 <?$APPLICATION->IncludeComponent(
	"renart:main.profile",
	"editFull",
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"SET_TITLE" => "N",
		"USER_PROPERTY" => array(
			0 => "UF_DEPARTMENT",
			1 => "UF_FUNCTIONAL",
			2 => "UF_EXPIRIENCE",
			3 => "UF_LAST_WORK",
			4 => "UF_ACHIEVEMENT",
			5 => "UF_DYNAMICS_INCOME_1",
			6 => "UF_DYNAMICS_INCOME_2",
			7 => "UF_DYNAMICS_PEOPLE",
			8 => "UF_DYNAMICS_GOVSHARE",
			9 => "UF_COMPANYADDRESS",
		),
		"SEND_INFO" => "N",
		"CHECK_RIGHTS" => "N",
		"USER_PROPERTY_NAME" => "",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>