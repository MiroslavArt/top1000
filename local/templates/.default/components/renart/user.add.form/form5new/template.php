
<div class="common-form profile-reg-form reg-form">
	<h3>Сотрудник 1</h3>
	<form action="." class="profile-reg profile-reg-other">
	<input type="hidden" name="REG_COL" value="Y">
	<input type="hidden" name="VERSION" value="2">
	<input type="hidden" name="FORM" value="form5">
	<input type="hidden" name="REFEREAL" id="form5_refereal" value="<?=$arResult["CURRENT_USER"];?>">
		<div class="form-ttl">
			Предложите, пожалуйста, до 10 кандидатов (высших и функциональных руководителей других компаний) в качестве претендентов на участие в рейтинге.
		</div>
		<div class="form-row clearfix">
			<div class="form-item form-item-33">
				<span for="reg_other_name">Фамилия<span class="req">*</span></span>
				<input type="text" name="last_name" id="reg_other_name" required />
			</div>
			<div class="form-item form-item-33">
				<span for="reg_other_lastname">Имя<span class="req">*</span></span>
				<input type="text" name="name" id="reg_other_lastname" required />
			</div>
			<div class="form-item form-item-33">
				<span for="reg_other_patronymic">Отчество<span class="req">*</span></span>
				<input type="text" name="second_name" id="reg_other_patronymic" required />
			</div>
		</div>
		<div class="form-row clearfix">
			<div class="form-item">
				<span for="reg_other_direction">Функциональное направление<span class="req">*</span></span>
				<select name="functional" id="reg_other_direction" required="">
					<option value="">Выбрать функциональное направление</option>
					<?foreach($arResult["DIRECTIONS"] as $id=>$direction):?>
						<?if($direction["ID"] != 24):?>
							<option value="<?=$direction["ID"];?>"><?=$direction["NAME"];?></option>
						<?endif;?>
					<?endforeach;?>
				</select>
			</div>
		</div>

		<div class="form-row clearfix">
			<div class="form-item form-item-35">
				<label for="reg_companyname">Название компании<span class="req">*</span></label>
				<input type="text" name="opf" id="reg_company_opf" value="" required placeholder="ОПФ (ООО, АО, ПАО и т.д.)"/>
			</div>
			<div class="form-item form-item-65">
				<label for="reg_companyname2">&nbsp </label>
				<input type="text" name="companyname" id="reg_other_company" value="" required placeholder="Название"/>
			</div>
		</div>
		
		<div class="form-row clearfix">

			<div class="form-item form-item-50">
				<label for="reg_other_phone">Контактный телефон<span class="req">*</span></label>
				<input type="text" name="phone" id="reg_other_phone" class="phone" required />
			</div>
			<div class="form-item form-item-50">
				<label for="reg_other_email">E-mail<span class="req">*</span></label>
				<input type="text" name="email" id="reg_other_email" class="email" required />
			</div>
		</div>
												
		<?/*
		<div class="form-add-wrapper">
			<div class="button button-add">Добавить сотрудника</div>
		</div>
		*/?>
		<!--div class="form-footer">
			<input value="Зарегистрировать" class="button button-1" type="submit">
		</div-->
		<div class="form-footer">
			<div class="form-footer-top">
				<input type="submit" value="Зарегистрировать коллегу" class="button button-1" />
				<button class="button button-add" disabled >Добавить сотрудника</button>
			</div>
		</div>
	</form>
</div>
