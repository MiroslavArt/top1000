<?
/**
 * @global CMain $APPLICATION
 * @param array $arParams
 * @param array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>

					<div class="common-form login-form profile-form">

                        <? if ($_GET['USER_PROF']): ?>
                        <form method="post" name="form1" action="<?=$arResult["FORM_TARGET"].'?USER_PROF='.$_GET['USER_PROF']?>" enctype="multipart/form-data">
                        <? else: ?>
                        <form method="post" name="form1" action="<?=$arResult["FORM_TARGET"] ?>" enctype="multipart/form-data">
                        <? endif; ?>
							<?=$arResult["BX_SESSION_CHECK"]?>
							<input type="hidden" name="lang" value="<?=LANG?>" />
							<input type="hidden" name="ID" value="<?=$arResult['ID']?>" />
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_company">ОПФ</label>
									<div class="input-wrapper input-wrapper-narrow">
										<input type="text" name="UF_OPF" maxlength="255" value="<?=$arResult["arUser"]["UF_OPF"]?>" required />
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_company">Компания</label>
									<div class="input-wrapper input-wrapper-narrow">
										<input type="text" name="WORK_COMPANY" maxlength="255" value="<?=$arResult["arUser"]["WORK_COMPANY"]?>" required />
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_company">Адрес компании</label>
									<div class="input-wrapper input-wrapper-narrow">
										<input type="text" name="UF_COMPANYADDRESS" maxlength="255" value="<?=$arResult["arUser"]["UF_COMPANYADDRESS"]?>" required />
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_company">Динамика выручки</label>
									<div class="input-wrapper input-wrapper-narrow">
										<input type="text" name="UF_DYNAMICS_INCOME_1" maxlength="255" value="<?=$arResult["arUser"]["UF_DYNAMICS_INCOME_1"]?>"/>
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_company">Динамика прибыли</label>
									<div class="input-wrapper input-wrapper-narrow">
										<input type="text" name="UF_DYNAMICS_INCOME_2" maxlength="255" value="<?=$arResult["arUser"]["UF_DYNAMICS_INCOME_2"]?>"/>
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_company">Динамика численности персонала</label>
									<div class="input-wrapper input-wrapper-narrow">
										<input type="text" name="UF_DYNAMICS_PEOPLE" maxlength="255" value="<?=$arResult["arUser"]["UF_DYNAMICS_PEOPLE"]?>"/>
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_company"> Доля государственного участия</label>
									<div class="input-wrapper input-wrapper-narrow">
										<input type="text" name="UF_DYNAMICS_GOVSHARE" maxlength="255" value="<?=$arResult["arUser"]["UF_DYNAMICS_GOVSHARE"]?>"/>
									</div>
								</div>
							</div>
							
							<div class="form-row clearfix">
								<div class="form-item clearfix">
								
									<label class="name" for="profile_branch">Отрасль</label>
									<div class="input-wrapper input-wrapper-narrow">

									<?$arUserField = $arResult["USER_PROPERTIES"]["DATA"]["UF_DEPARTMENT"];?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:system.field.edit",
										$arUserField["USER_TYPE"]["USER_TYPE_ID"],
										array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?>
									</div>
									
								</div>
							</div>
							
							
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_direction">Функциональное направление</label>
									<div class="input-wrapper">

									<?$arUserField = $arResult["USER_PROPERTIES"]["DATA"]["UF_FUNCTIONAL"];?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:system.field.edit",
										$arUserField["USER_TYPE"]["USER_TYPE_ID"],
										array("SORT " => 'asc', "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?>

									</div>
								</div>
							</div>
						
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_post">Должность</label>
									<div class="input-wrapper">
										<input type="text" name="WORK_POSITION" maxlength="255" value="<?=$arResult["arUser"]["WORK_POSITION"]?>"  required />
									</div>
								</div>
							</div>
							
							
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_experience">Стаж работы в компании</label>
									<div class="input-wrapper input-wrapper-narrow">
										<?/*<input type="text" name="profile_experience" id="profile_experience" value="Более 15 лет" required />*/?>
									<?$arUserField = $arResult["USER_PROPERTIES"]["DATA"]["UF_EXPIRIENCE"];?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:system.field.edit",
										$arUserField["USER_TYPE"]["USER_TYPE_ID"],
										array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?>
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_lastcompany">Прошлое место работы</label>
									<div class="input-wrapper input-wrapper-narrow">
										<?$arUserField = $arResult["USER_PROPERTIES"]["DATA"]["UF_LAST_WORK"];?>
										<?$APPLICATION->IncludeComponent(
										"bitrix:system.field.edit",
										$arUserField["USER_TYPE"]["USER_TYPE_ID"],
										array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?>
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_achievements">Основные достижения на занимаемой позиции</label>
									<div class="input-wrapper">
									
									<?$arUserField = $arResult["USER_PROPERTIES"]["DATA"]["UF_ACHIEVEMENT"];?>

									<?/*$LHE = new CLightHTMLEditor;
									$LHE->Show(array(
										'id' => "main_UF_ACHIEVEMENT",
										'width' => '100%',
										'height' => '300px',
										'inputName' => "UF_ACHIEVEMENT",
										'content' => htmlspecialchars_decode($arResult["arUser"]["UF_ACHIEVEMENT"]),
										'bUseFileDialogs' => false,
										'bFloatingToolbar' => false,
										'bArisingToolbar' => false,
										'toolbarConfig' => array(
										),
									));*/?>
									<?$arUserField = $arResult["USER_PROPERTIES"]["DATA"]["UF_ACHIEVEMENT"];?>
									<?$arUserField["SETTINGS"]["MAX_LENGTH"] = 1500;?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:system.field.edit",
										$arUserField["USER_TYPE"]["USER_TYPE_ID"],
										array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?>
									</div>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-item clearfix">
									<label class="name" for="profile_phone">Контактный телефон</label>
									<div class="input-wrapper input-wrapper-narrow">
										<input type="text" name="PERSONAL_PHONE" maxlength="255" class="phone" value="<?=$arResult["arUser"]["PERSONAL_PHONE"]?>" required />
									</div>
								</div>
							</div>
							<div class="form-footer">
								<input type="hidden" name="save" value="<?=(($arResult["ID"]>0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD"))?>"/>
								<button type="submit"  class="button button-1 button-1-small">Сохранить</button>
							</div>
						</form>
					</div>
					<?ShowError($arResult["strProfileError"]);?>
							<?
							if ($arResult['DATA_SAVED'] == 'Y') {
								ShowNote(GetMessage('PROFILE_DATA_SAVED'));
								//localRedirect("/profile/?USER_PROF=12766");
							}
							?>
					<?//echo "<pre>";print_r($arResult["USER_PROPERTIES"]["DATA"]);echo "</pre>";?>
