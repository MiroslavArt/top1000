<div class="common-form profile-reg-form reg-form">
	<h3>Сотрудник 1</h3>
	<form action="." class="profile-reg profile-reg-colleague">
	<input type="hidden" name="REG_COL" value="Y">
	<input type="hidden" name="FORM" value="form4">
	<input type="hidden" name="REFEREAL" id="form4_refereal" value="<?=$arResult["CURRENT_USER"];?>">
		<div class="form-row clearfix">
			<div class="form-item form-item-33">
				<label for="reg_colleague_name">Фамилия<span class="req">*</span></label>
				<input type="text" name="last_name" id="reg_other_name" required />
			</div>
			<div class="form-item form-item-33">
				<label for="reg_colleague_lastname">Имя<span class="req">*</span></label>
					<input type="text" name="name" id="reg_other_lastname" required />
			</div>
			<div class="form-item form-item-33">
				<label for="reg_colleague_patronymic">Отчество<span class="req">*</span></label>
				<input type="text" name="second_name" id="reg_other_patronymic" required />
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item">
				<label for="reg_colleague_company">Компания<span class="req">*</span></label>
				<input type="text" name="company" id="reg_colleague_company"  value="<?=$arResult["COMPANY"];?>" required disabled/>
				<input type="hidden" name="company" id="reg_colleague_company" value="<?=$arResult["COMPANY"];?>"  required/>
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item">
				<label for="reg_colleague_post">Должность<span class="req">*</span></label>
				<input type="text" name="reg_colleague_post" id="reg_colleague_post" required />
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item">
				<label for="reg_colleague_direction">Функциональное направление<span class="req">*</span></label>
				<select name="functional" id="reg_colleague_direction" required >
					<?foreach($arResult["DIRECTIONS"] as $id=>$direction):?>
						<?if($direction["ID"] != 24):?>
							<option value="<?=$direction["ID"];?>"><?=$direction["NAME"];?></option>
						<?endif?>
					<?endforeach;?>
				</select>
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item form-item-50">
				<label for="reg_colleague_email">E-mail<span class="req">*</span></label>
				<input type="text" name="mail" id="reg_other_email" class="email" required />
			</div>
			<div class="form-item form-item-50">
				<label for="reg_colleague_phone">Контактный телефон<span class="req">*</span></label>
				<input type="text" name="phone" id="reg_other_phone" class="phone" required />
			</div>
		</div>
		<?/*<div class="form-add-wrapper">
			<div class="button button-add">Добавить сотрудника</div>
		</div>*/?>
		<!--div class="form-footer">
			<input type="submit" value="Зарегистрировать" class="button button-1"/>
		</div-->
		<div class="form-footer">
			<div class="form-footer-top">
				<input type="submit" value="Зарегистрировать коллегу" class="button button-1" />
				<button class="button button-add" disabled >Добавить сотрудника</button>
			</div>
		</div>
	</form>
</div>