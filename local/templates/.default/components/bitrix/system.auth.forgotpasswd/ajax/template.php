<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

//ShowMessage($arParams["~AUTH_RESULT"]);

?>
<?//print_r($arParams);?>
<?//print_r($arResult);?>
<?//echo '{"text":"'.$arParams["~AUTH_RESULT"].'","error": 1}';?>
<?/*
<div class="popup login-popup" id="forgotPopup">
	<div class="close"></div>
	<div class="popup-content">
		<h2>Восстановление пароля</h2>
		
		<div class="common-form login-form">
			<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
				<input type="hidden" name="AUTH_FORM" value="Y">
				<input type="hidden" name="TYPE" value="SEND_PWD">
				<div class="form-row">
					<div class="form-item">
						<label for="forgot_pass">Введите ваш e-mail<span class="req">*</span></label>
						<input type="text" name="USER_EMAIL" id="forgot_pass" required />
					</div>
				</div>
				<div class="form-footer">
					<input type="submit" name="send_account_info" class="button button-1 button-1-small" value="Сохранить" />
				</div>
			</form>
		</div>
		
	</div>
</div>
*/?>

<?/*
if (strlen($arResult["BACKURL"]) > 0)
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">
	<p>
	<?=GetMessage("AUTH_FORGOT_PASSWORD_1")?>
	</p>

<table class="data-table bx-forgotpass-table">
	<thead>
		<tr> 
			<td colspan="2"><b><?=GetMessage("AUTH_GET_CHECK_STRING")?></b></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?=GetMessage("AUTH_LOGIN")?></td>
			<td><input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" />&nbsp;<?=GetMessage("AUTH_OR")?>
			</td>
		</tr>
		<tr> 
			<td><?=GetMessage("AUTH_EMAIL")?></td>
			<td>
				<input type="text" name="USER_EMAIL" maxlength="255" />
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr> 
			<td colspan="2">
				<input type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" />
			</td>
		</tr>
	</tfoot>
</table>
<p>
<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
</p> 
</form>
<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
*/?>