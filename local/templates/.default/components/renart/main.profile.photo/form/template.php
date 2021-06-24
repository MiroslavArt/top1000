<>
 <div class="popup login-popup" id="userpicPopup">
	<div class="close"></div>
	<div class="popup-content">
		<h2>Добавление/ изменение фото2</h2>
		<div class="userpic-upload-hint">
			Вы можете загрузить изображение в формате<br>JPG, GIF или PNG
		</div>
		<div class="common-form userpic-form">
            <? if ($_GET['USER_PROF']):?>
            <?php
            $arResult['ID'] = $_GET['USER_PROF'];
            ?>
            <form method="post" name="form1"  action="<?=$arResult["FORM_TARGET"].'?USER_PROF='.$_GET['USER_PROF']?>" enctype="multipart/form-data" id="userpicForm">
            <? else: ?>
               <?  $arResult['ID'];  ?>
                <form method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data" id="userpicForm">
            <? endif; ?>



			<?=$arResult["BX_SESSION_CHECK"]?>
			<input type="hidden" name="lang" value="<?=LANG?>" />
			<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />

				<div class="form-row clearfix">
					<div class="form-item">
						<?/*<input type="file" name="profile_userpic" id="profile_userpic"/>*/?>
						 <?=$arResult["arUser"]["PERSONAL_PHOTO_INPUT"]?>
					</div>
				</div>
					<input type="submit" name="save"  class="button button-1 button-1-small" value="Сохранить">
			</form>
		</div>
	</div>
</div>
 
 

 
 