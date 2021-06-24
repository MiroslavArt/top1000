<div class="common-form profile-reg-form reg-form">
<?//echo"<pre>";print_r($arResult);echo"</pre>";?>
	<h3>Сотрудник 1</h3>
	<form action="." class="profile-reg profile-reg-colleague">
	<input type="hidden" name="REG_COL" value="Y">
	<input type="hidden" name="VERSION" value="2">
	<input type="hidden" name="FORM" value="form4">
	<input type="hidden" name="REFEREAL" id="form4_refereal" value="<?=$arResult["CURRENT_USER"];?>">
		<div class="form-ttl">
			Просим Вас предложить руководителей Вашей компании для участия в проекте в качестве кандидатов рейтинга и экспертов рабочих групп комиссии по формированию рейтинга.
			Один кандидат может быть выдвинут только в одном функциональном направлении.
		</div>
		
		<div class="form-row clearfix">
			<div class="form-item">
				<label for="reg_colleague_direction">Функциональное направление<span class="req">*</span></label>
				<select name="functional" id="reg_colleague_direction" required >
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
			
			<div class="form-item form-item-35">
				<label for="reg_companyname">Название компании<span class="req">*</span></label>
				<input type="text" name="opf_view" id="reg_colleague_opf" disabled value="<?=$arResult["OPF"];?>" required placeholder="ОПФ (ООО, АО, ПАО и т.д.)"/>
				<input type="hidden" name="opf" id="reg_colleague_opf_hidden" value="<?=$arResult["OPF"];?>"/>
			</div>
		
			<div class="form-item form-item-65">
				<label for="reg_colleague_company"> &nbsp </label>
				<input type="text" name="company_view" id="reg_colleague_company"  value="<?=htmlspecialchars($arResult["COMPANY"]);?>" required disabled/>
				<input type="hidden" name="companyname" id="reg_colleague_company_hidden" value="<?=htmlspecialchars($arResult["COMPANY"]);?>"  required/>
			</div>
				
		</div>

		<div class="form-row clearfix">
			<div class="form-item form-item-50">
				<label for="reg_colleague_post">Должность<span class="req">*</span></label>
				<input type="text" name="position" id="reg_colleague_post" value="" required />
			</div>
			<div class="form-item form-item-50">
				<label for="reg_colleague_exp">Стаж работы в компании в указанной должности<span class="req">*</span></label>
				<input type="text" name="exp" id="reg_colleague_exp" value="" required />
			</div>
		</div>

		<div class="form-row clearfix">
			<div class="form-item">
				<label for="reg_achievements">Основные достижения на занимаемой позиции за последний год<span class="req">*</span></label>
				<?/*$LHE = new CLightHTMLEditor;
				$LHE->Show(array(
					'id' => "reg_achievements",
					'width' => '100%',
					'height' => '200px',
					'inputName' => "achievement",
					'content' => "",
					'bUseFileDialogs' => false,
					'bFloatingToolbar' => false,
					'bArisingToolbar' => false,
					'toolbarConfig' => array(
					),
				));*/?>
				<textarea class="initial" name="achievement" id="reg_achievements" rows="5" maxlength="1500" required ></textarea>
			</div>
		</div>
		
		<div class="form-row clearfix">
			<div class="form-item form-item-50">
				<label for="reg_colleague_email">E-mail<span class="req">*</span></label>
				<input type="text" name="email" id="reg_other_email" class="email" required />
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