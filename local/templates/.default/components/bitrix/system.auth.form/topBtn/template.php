<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arResult["FORM_TYPE"] == "login"):?>

	<div class="login-link">
		<span>Войти в личный кабинет</span>
	</div>
<?else:?>

	<div class="login-link logged-in">
		<a href="/profile/"><?=$arResult["USER_NAME"];?></a>
	</div>

<?endif;?>