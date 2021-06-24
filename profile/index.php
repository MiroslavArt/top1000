<?
//define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мой Профиль");


global $USER;
if ($USER->GetID()) {
	//localRedirect("/profile/");


    $grUser = CUser::GetByID($USER->GetID());
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
        $arGroups = CUser::GetUserGroup($USER->GetID());
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
							<?if(STATE == "REGISTRATION"):?>
							<div class="profile-controls">
								<a href="edit/" class="profile-data-link"><span>Редактировать личные данные</span></a><br>
								<a href="#" class="profile-photo-link profile-popup-link"><span>Добавить / изменить фото</span></a><br>
								<a href="#" class="profile-pass-link profile-popup-link"><span>Изменить пароль</span></a>
							</div>
							<?endif;?>
						</div>
					</div>
					
					<div class="profile-data">
						<div class="profile-data-item clearfix">
							<div class="name">
								ОПФ
							</div>
							<div class="val">
								<?=$arUser["UF_OPF"];?>
							</div>
						</div>
						
						<div class="profile-data-item clearfix">
							<div class="name">
								Компания
							</div>
							<div class="val">
								<?=$arUser["WORK_COMPANY"];?>
							</div>
						</div>

						<div class="profile-data-item clearfix">
							<div class="name">
								Адрес компании
							</div>
							<div class="val">
								<?=$arUser["UF_COMPANYADDRESS"];?>
							</div>
						</div>

						<div class="profile-data-item clearfix">
							<div class="name">
								Динамика выручки
							</div>
							<div class="val">
								<?=$arUser["UF_DYNAMICS_INCOME_1"];?>
							</div>
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Динамика прибыли
							</div>
							<div class="val">
								<?=$arUser["UF_DYNAMICS_INCOME_2"];?>
							</div>
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Динамика численности персонала
							</div>
							<div class="val">
								<?=$arUser["UF_DYNAMICS_PEOPLE"];?>
							</div>
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Доля государственного участия
							</div>
							<div class="val">
								<?=$arUser["UF_DYNAMICS_GOVSHARE"];?>
							</div>
						</div>

						<div class="profile-data-item clearfix">
							<div class="name">
								Отрасль
							</div>
							<div class="val">
								<?$res = CIBlockElement::GetByID($arUser["UF_DEPARTMENT"]);
									if($ar_res = $res->GetNext()){
									  echo $ar_res['NAME'];
									}
								?>
							</div>
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Функциональное направление
							</div>
							<div class="val">
								<?$res = CIBlockElement::GetByID($arUser["UF_FUNCTIONAL"]);
									if($ar_res = $res->GetNext()){
									  echo $ar_res['NAME'];
									}
								?>
							</div>
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Должность
							</div>
							<div class="val">
								<?=$arUser["WORK_POSITION"];?>
							</div>
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Стаж работы в компании
							</div>
							<div class="val">
								<?=$arUser["UF_EXPIRIENCE"];?>
							</div>
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Прошлое место работы
							</div>
							<div class="val">
								<?=$arUser["UF_LAST_WORK"];?>
							</div>
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Основные достижения на занимаемой позиции
							</div>
							<div class="val">
								<?=nl2br($arUser["UF_ACHIEVEMENT"]);?>
							</div> 
						</div>
						<div class="profile-data-item clearfix">
							<div class="name">
								Контактный телефон
							</div>
							<div class="val">
								<?=$arUser["PERSONAL_PHONE"];?>
							</div>
						</div>

                        <?
                        $filter = Array
                        (
                            "WORK_COMPANY"                  => $arsUser['WORK_COMPANY'],

                        );
                        $rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $filter); // выбираем пользователей
                        while($rsUse = $rsUsers->NavNext()) :?>


                            <?php  if ($USER->GetID()  && in_array('7' , $arGroups)):?>
                                <div class="profile-data-item clearfix">
                                    <div class="name">
                                       Имя пользователя:
                                    </div>



                                    <div class="val">

                                        <a href="/profile/edit/?USER_PROF=<?=$rsUse["ID"];?>"><?=$rsUse["LAST_NAME"];?> <?=$rsUse["NAME"];?>  <?=$rsUse["SECOND_NAME"];?><a>
                                    </div>
                                </div>
                            <?php endif;?>
                       <? endwhile;
                        ?>




					</div>
					<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>