<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?/*
<div class="popup login-popup" id="forgotChangePassPopup">
	<div class="close"></div>
	<div class="popup-content">
		<h2>Войти в личный кабинет</h2>
		
		<div class="common-form login-form">
			<form method="post" action="<?=$arResult["AUTH_FORM"]?>" name="bform" id="forgotChangePass">
			<input type="hidden" name="AUTH_FORM" value="Y">
			<input type="hidden" name="TYPE" value="CHANGE_PWD">
				<div class="form-row">
					<div class="form-item">
						<label for="login_name">Логин<span class="req">*</span></label>
						<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>"  id="login_name" required disabled/>
					</div>
				</div>
				<div class="form-row">
					<div class="form-item">
						<label for="login_name">Контрольная строка<span class="req">*</span></label>
						<input type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" required disabled/>
					</div>
				</div>
				<div class="form-row">
					<div class="form-item">
						<label for="login_pass">Новый пароль<span class="req">*</span></label>
						<input type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>"required />
					</div>
				</div>
				<div class="form-row">
					<div class="form-item">
						<label for="login_pass">Подтверждение пароля<span class="req">*</span></label>
						<input  type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>"  required />
					</div>
				</div>
				<div class="form-footer">
					<input type="submit" name="change_pwd" class="button button-1 button-1-small" value="Изменить пароль">
				</div>
			</form>
		</div>
		
	</div>
</div>*/?>

<?/*

<div class="bx-auth">

<?
ShowMessage($arParams["~AUTH_RESULT"]);
?>
<form method="post" action="<?=$arResult["AUTH_FORM"]?>" name="bform">
	<?if (strlen($arResult["BACKURL"]) > 0): ?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<? endif ?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="CHANGE_PWD">
	<table class="data-table bx-changepass-table">
		<thead>
			<tr>
				<td colspan="2"><b><?=GetMessage("AUTH_CHANGE_PASSWORD")?></b></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span class="starrequired">*</span><?=GetMessage("AUTH_LOGIN")?></td>
				<td><input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" class="bx-auth-input" /></td>
			</tr>
			<tr>
				<td><span class="starrequired">*</span><?=GetMessage("AUTH_CHECKWORD")?></td>
				<td><input type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" class="bx-auth-input" /></td>
			</tr>
			<tr>
				<td><span class="starrequired">*</span><?=GetMessage("AUTH_NEW_PASSWORD_REQ")?></td>
				<td><input type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>" class="bx-auth-input" />
<?if($arResult["SECURE_AUTH"]):?>
				<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
				<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
				</noscript>
<script type="text/javascript">
document.getElementById('bx_auth_secure').style.display = 'inline-block';
</script>
<?endif?>
				</td>
			</tr>
			<tr>
				<td><span class="starrequired">*</span><?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?></td>
				<td><input type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="bx-auth-input"  /></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td><input type="submit" name="change_pwd" value="<?=GetMessage("AUTH_CHANGE")?>" /></td>
			</tr>
		</tfoot>
	</table>

<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>
<p>
<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
</p>

</form>

<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
</div>*/?>