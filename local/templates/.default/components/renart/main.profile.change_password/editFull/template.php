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
					
						
							<form method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
							<?=$arResult["BX_SESSION_CHECK"]?>
							<input type="hidden" name="lang" value="<?=LANG?>" />
							<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
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
										array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?>
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
									<?$APPLICATION->IncludeComponent(
										"bitrix:system.field.edit",
										$arUserField["USER_TYPE"]["USER_TYPE_ID"],
										array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?></div>
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
								localRedirect("/profile/");
							}
							?>
					<?//echo "<pre>";print_r($arResult["USER_PROPERTIES"]["DATA"]);echo "</pre>";?>
