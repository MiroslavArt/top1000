<div class="common-form reg-form" rel="reg-form-1" style="display:block;">
	<h3>Регистрация участника</h3>
	<form action="." class="reg-form-self">
	<input type="hidden" name="FORM" value="form1">
		<div class="form-row clearfix">
			<div class="form-item form-item-33">
				<label for="reg_name">Фамилия<span class="req">*</span></label>
				<input type="text" name="last_name" id="reg_name" value="" required />
			</div>
			<div class="form-item form-item-33">
				<label for="reg_lastname">Имя<span class="req">*</span></label>
				<input type="text" name="name" id="reg_lastname" value="" required />
			</div>
			<div class="form-item form-item-33">
				<label for="reg_patronymic">Отчество<span class="req">*</span></label>
				<input type="text" name="second_name" id="reg_patronymic" value=""  required />
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item form-item-50">
				<label for="reg_company">Компания<span class="req">*</span></label>
				<input type="text" name="company" id="reg_company" value="" required />
			</div>
			<div class="form-item form-item-50">
				<label for="reg_branch">Отрасль<span class="req">*</span></label>
				<select name="department" id="reg_branch" required >
					<?/*<option value="">Выберите отрасль</option>*/?>
					<option value="">Выберите отрасль</option>
					<?foreach($arResult["DEPARTMENTS"] as $id=>$department):?>
						<option value="<?=$department["ID"];?>"><?=$department["NAME"];?></option>
					<?endforeach;?>
				</select>
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item">
				<label for="reg_post">Должность<span class="req">*</span></label>
				<input type="text" name="position" id="reg_post" value="" required />
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item">
				<label for="reg_direction">Функциональное направление<span class="req">*</span></label>
				<select name="functional" id="reg_direction" required >
					<option value="">Выберите функциональное направление</option>
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
				<label for="reg_experience">Стаж работы в компании<span class="req">*</span></label>
				<input type="text" name="exp" id="reg_experience" value=""  required />
			</div>
			<div class="form-item form-item-50">
				<label for="reg_lastcompany">Прошлое место работы</label>
				<input type="text" name="last_work" value="" id="reg_lastcompany"/> 
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item">
				<label for="reg_achievements">Основные достижения на занимаемой позиции за последний год</label>
				<textarea name="achievement" id="reg_achievements" rows="5"></textarea>
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item form-item-50">
				<label for="reg_email">E-mail<span class="req">*</span></label>
				<input type="text" name="mail" id="reg_email" class="email" required />
			</div>
			<div class="form-item form-item-50">
				<label for="reg_phone">Контактный телефон<span class="req">*</span></label>
				<input type="text" name="phone" id="reg_phone" class="phone"  required/>
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-checkboxes">
				<div class="form-item">
					<label for="reg_agree">
						<input type="checkbox" name="reg_agree" id="reg_agree" required /> <?/*Подтверждаю, что введённая информация достоверна и может быть опубликована в рейтинге «ТОП-1000 Российских Менеджеров»*/?>
						Подтверждаю своё согласие на обработку персональных данных Ассоциацией Менеджеров и достоверность предоставленной информации для публикации в рейтинге «ТОП-1000 Российских Менеджеров»
					</label>
				</div>
			</div>
		</div>
		<div class="form-footer">
			<?/*<div class="success-message" style="display:none;">
				Регистрация участника прошла успешно. На указанную при регистрации эл. почту отправлено письмо с информацией о регистрации.
			</div>*/?>
			<input type="submit" value="Зарегистрировать участника" class="button button-1"  />
			<div class="button button-continue" style="display:none;"><span>перейти к этапу 2 “регистрация коллег”</span></div>
		</div>
	</form>
</div>
									