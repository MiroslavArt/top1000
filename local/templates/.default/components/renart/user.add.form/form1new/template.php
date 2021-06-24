<?php
include 'form_arr.php';
?>
<?
    function isAjax ()
    {
    	if (
    		isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    		&& $_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest")
    		return true;
    	return false;
    }
?>
<?if(!isAjax()):?>
<div id="forma_mutant">
<?endif?>
<?if($_REQUEST["form_mutation"] == "first_skin"):?>
	<div class="common-form reg-form" rel="reg-form-1" style="display:block;">
		<h3>Информация о компании и контактное лицо3</h3>
		<form action="." class="reg-form-self"  enctype="multipart/form-data">
		<input type="hidden" name="VERSION" value="2">
		<input type="hidden" name="FORM" value="form1">
            <input type="hidden" name="REFEREAL" id="form2_refereal" value="">
            <input type="hidden" name="REFEREA3" id="form2_refereal3" value="<?=$_POST['REFEREAL']?>">
		<div class="form-radios">
			<div class="form-row clearfix">
			
				<div class="form-item form-item-65">
					<label for="second_skin" >
						<input type="radio" name="form_mutation" id="second_skin" value="second_skin" checked="checked"/>
						Я кандидат рейтинга
						<div class="radio-descr">
							(самостоятельное заполнение анкеты кандидатом рейтинга)
						</div>
					</label>
				</div>
			
				<div class="form-item form-item-35">
					<label for="first_skin">
						<input type="radio" name="form_mutation" id="first_skin" value="first_skin"   />
						Я контактное лицо
						<div class="radio-descr">
							(представитель кандидата, ответственный за заполнение анкеты от его имени)
						</div>
					</label>
				</div>
				

				
			</div>
		</div>
<script>
function RAZ911() {
  var c = document.getElementsByName('form_mutation');
  if (!c[1].checked) c[1].checked = true;  // поставить checked на первый input, если он не установлен
}
RAZ911();
</script>
<?global $USER;?>

			

			<div class="form-row clearfix">
				<div class="form-item form-item-35">
					<label for="reg_companyname">Название компании<span class="req">*</span></label>
					<input type="text" list="list1" name="opf" id="reg_company_opf" value="" required placeholder="ОПФ (ООО, АО, ПАО и т.д.)"/>
                    <datalist id="list1">
                        <option value="ООО"></option>
                        <option value="АО"></option>
                        <option value="ПАО"></option>
                        <option value="ЗАО"></option>
                        <option value="ФГУП"></option>
                    </datalist>
				</div>
				<div class="form-item form-item-65">
					<label for="reg_companyname2">&nbsp </label>
					<input type="text" class="form-list1" list="" name="companyname" id="reg_company" value="" required placeholder="Название"/>
                    <datalist id="list2">
                        <?php foreach ($fir as $value):?>
                            <option value="<?=$value?>"></option>
                        <?endforeach;?>

                    </datalist>
				</div>
			</div>

			
			<div class="form-row clearfix">
				<div class="form-item">
					<label for="reg_companyaddress">Адрес компании<span class="req">*</span> (фактический; на этот адрес, в случае попадания в рейтинг, будет направлен диплом финалиста рейтинга)</label>
					<input type="text" name="companyaddress" id="reg_companyaddress" value="" required />
				</div>
			</div>
			<div class="form-row clearfix">
				<div class="form-item">
                    <label for="reg_branch">Укажите отрасль экономики, в рамках которой осуществляется деятельность Вашей компании<br>(необходимо выбрать только одну отрасль)<span class="req">*</span><span class="coffe_i" data-title="">?</span></label>

					<select name="department" id="reg_branch" required >
						<?/*<option value="">Выберите отрасль</option>*/?>
						<option value="">Выберите отрасль</option>
						<?foreach($arResult["DEPARTMENTS"] as $id=>$department):?>
							<option title="<?=$department['DETAIL_TEXT']?>" value="<?=$department["ID"];?>"><?=$department["NAME"];?></option>
						<?endforeach;?>
					</select>
				</div>
			</div>

			<div class="form-ttl">
				Укажите показатели компании в % за отчётный период (например, за последний год по отношению к предыдущему). Финансовые показатели указываются по РСБУ или (МСФО). Для компаний финансового сектора в качестве эквивалента выручки рассчитываются суммарные доходы от основной деятельности.
				<labeL>Данные будут доступны только участникам голосования в рамках функциональных направлений</label>
			</div>
			<div class="form-row clearfix">
				<div class="form-item form-item-50">
					<label for="reg_income_1">Динамика выручки, %<span class="req">*</span></label>
					<input type="text" name="reg_income_1" id="reg_income_1" value="" required />
				</div>
				<div class="form-item form-item-50">
					<label for="reg_income_2">Динамика прибыли, %<span class="req">*</span></label>
					<input type="text" name="reg_income_2" id="reg_income_2" value="" required />
				</div>
			</div>
			<div class="form-row clearfix">
				<div class="form-item form-item-50">
					<label for="reg_people">Динамика численности персонала, %<span class="req">*</span></label>
					<input type="text" name="reg_people" id="reg_people" value="" required />
				</div>
				<div class="form-item form-item-50">
					<label for="reg_govshare">Доля государственного участия, %<span class="req">*</span></label>
					<input type="text" name="reg_govshare" id="reg_govshare" value="" required />
				</div>
			</div>
			
			<div class="form-ttl">
				Контактное лицо (представитель кандидата, ответственный за заполнение анкеты от его имени)
			</div>
			
			<div class="form-row clearfix">
				<div class="form-item form-item-50">
					<label for="reg_name">ФИО<span class="req">*</span></label>
					<input type="text" name="contact_fio" id="reg_name" value="" required />
				</div>
				<div class="form-item form-item-50">
					<label for="reg_post">Должность<span class="req">*</span></label>
					<input type="text" name="position" id="reg_post" value="" required />
				</div>
			</div>
			<div class="form-row clearfix">
				<div class="form-item form-item-50">
					<label for="reg_email">E-mail<span class="req">*</span></label>
					<input type="text" name="email" id="reg_email" class="email" required />
				</div>
				<div class="form-item form-item-50">
					<label for="reg_phone">Контактный телефон<span class="req">*</span></label>
					<input type="text" name="phone" id="reg_phone" class="phone" required />
				</div>
			</div>
			
			<div class="form-row clearfix">
				<div class="form-checkboxes">
					<div class="form-item">
						<label for="reg_agree">
							<input type="checkbox" name="reg_agree" id="reg_agree" required /> <?/*Подтверждаю, что введённая информация достоверна и может быть опубликована в рейтинге «ТОП-1000 Российских Менеджеров»*/?>
							Подтверждаю своё согласие на обработку персональных данных Ассоциацией Менеджеров, а также достоверность предоставленной информации для публикации в рейтинге «ТОП-1000 Российских Менеджеров»
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
<?elseif(!isset($_REQUEST["form_mutation"]) || $_REQUEST["form_mutation"] == "second_skin"):?>
	<div class="common-form reg-form" rel="reg-form-1">
		<h3>Регистрация кандидатов рейтинга</h3>
		<form action="." enctype="multipart/form-data" class="reg-form-self">
		<input type="hidden" name="REG_COL" value="Y">
		<input type="hidden" name="VERSION" value="2">
		<input type="hidden" name="FORM" value="form2">
		<input type="hidden" name="REFEREAL" id="form2_refereal">
            <input type="hidden" name="REFEREA3" id="form2_refereal3" value="<?=$_POST['REFEREAL']?>">
			<div class="form-radios">
				<div class="form-row clearfix">
				
					<div class="form-item form-item-65">
						<label for="second_skin">
							<input type="radio" name="form_mutation" id="second_skin" value="second_skin"   />
							Я кандидат рейтинга
							<div class="radio-descr">
								(самостоятельное заполнение анкеты кандидатом рейтинга)
							</div>
						</label>
					</div>
				
					<div class="form-item form-item-35">
						<label for="first_skin">
							<input type="radio" name="form_mutation" id="first_skin" value="first_skin" checked="checked"/>
							Я контактное лицо
							<div class="radio-descr">
								(представитель кандидата, ответственный за заполнение анкеты от его имени)
							</div>
						</label>
					</div>
					

					
				</div>
			</div>
<script>
function RAZ911() {
  var c = document.getElementsByName('form_mutation');
  if (!c[0].checked) c[0].checked = true;  // поставить checked на второй input, если он не установлен
}
RAZ911();
</script>
			<div class="form-row clearfix">
				<div class="form-item">
					<label for="reg_colleague_direction">Функциональное направление<span class="req">*</span></label>
					<select name="functional" id="reg_colleague_direction" required >
						<option value="">Выберите</option>
							<?foreach($arResult["DIRECTIONS"] as $id=>$direction):?>
								<?if($direction["ID"] != 24):?>
									<option value="<?=$direction["ID"];?>"><?=$direction["NAME"];?></option>
								<?endif?>
							<?endforeach;?>
					</select>
				</div>
			</div>
			<?//echo("<pre>");print_r($_REQUEST);echo"</pre>";?>

			<div class="form-row clearfix">
				<div class="form-item form-item-33">
					<label for="reg_colleague_name">Фамилия<span class="req">*</span></label>
					<input type="text" name="last_name" value="" id="reg_colleague_name" required />
				</div>
				<div class="form-item form-item-33">
					<label for="reg_colleague_lastname">Имя<span class="req">*</span></label>
					<input type="text" name="name" value="" id="reg_colleague_lastname" required />
				</div>
				<div class="form-item form-item-33">
					<label for="reg_colleague_patronymic">Отчество<span class="req">*</span></label>
					<input type="text" name="second_name" value="" id="reg_colleague_patronymic" required />
				</div>
			</div>
			<?/*
			<div class="form-row clearfix">
				<div class="form-item">
					<label for="reg_colleague_company">Компания<span class="req">*</span></label>
					<input type="text" name="company_view" id="reg_colleague_company" disabled value=""/>
					<input type="hidden" name="companyname" id="reg_colleague_company_hidden" value=""/>
				</div>
			</div>
			*/?>
			<div class="form-row clearfix">
				<div class="form-item form-item-35">
					<label for="reg_companyname">Название компании<span class="req">*</span></label>
					<input type="text" LIST="list1" name="opf" id="reg_company_opf" value="" required placeholder="ОПФ (ООО, АО, ПАО и т.д.)"/>
                    <datalist id="list1">
                        <option value="ООО"></option>
                        <option value="АО"></option>
                        <option value="ПАО"></option>
                        <option value="ЗАО"></option>
                        <option value="ФГУП"></option>
                    </datalist>
				</div>
				<div class="form-item form-item-65">
					<label for="reg_companyname2">&nbsp </label>
					<input type="text" list="" name="companyname" id="reg_company" value="" required placeholder="Название"/>
                    <datalist class="form-list1"  id="list2">

                        <?php foreach ($fir as $value):?>
                        <option value="<?=htmlspecialchars($value, ENT_COMPAT)?>"><?=$value?></option>
                        <?endforeach;?>


                    </datalist>

                </div>
			</div>
			
			<div class="form-row clearfix">
				<div class="form-item">
					<label for="reg_companyaddress">Адрес компании<span class="req">*</span> (фактический; на этот адрес, в случае попадания в рейтинг, будет направлен диплом финалиста рейтинга)</label>
					<input type="text" name="companyaddress" id="reg_companyaddress" value="" required />
				</div>
			</div>
			<?//if($_REQUEST["TEST"] == "Y"):?>
				<div class="form-row clearfix">
					<div class="form-item">
						<label for="reg_branch">Укажите отрасль экономики, в рамках которой осуществляется деятельность Вашей компании<br>(необходимо выбрать только одну отрасль)<span class="req">*</span><span class="coffe_i" data-title="">?</span></label>
						<select name="department" id="reg_branch" required >
							<?/*<option value="">Выберите отрасль</option>*/?>
							<option value="">Выберите отрасль</option>
							<?foreach($arResult["DEPARTMENTS"] as $id=>$department):?>
								<option title="<?=$department['DETAIL_TEXT']?>" value="<?=$department["ID"];?>"><?=$department["NAME"];?></option>
							<?endforeach;?>
						</select>
					</div>
				</div>

			<?//endif;?>
			<div class="form-ttl">
				Укажите показатели компании в % за отчётный период (например, за последний год по отношению к предыдущему). Финансовые показатели указываются по РСБУ или (МСФО). Для компаний финансового сектора в качестве эквивалента выручки рассчитываются суммарные доходы от основной деятельности.
			</div>
			<div class="form-row clearfix">
				<div class="form-item form-item-50">
					<label for="reg_income_1">Динамика выручки, %<span class="req">*</span></label>
					<input type="text" name="reg_income_1" id="reg_income_1" value="" required />
				</div>
				<div class="form-item form-item-50">
					<label for="reg_income_2">Динамика прибыли, %<span class="req">*</span></label>
					<input type="text" name="reg_income_2" id="reg_income_2" value="" required />
				</div>
			</div>
			<div class="form-row clearfix">
				<div class="form-item form-item-50">
					<label for="reg_people">Динамика численности персонала, %<span class="req">*</span></label>
					<input type="text" name="reg_people" id="reg_people" value="" required />
				</div>
				<div class="form-item form-item-50">
					<label for="reg_govshare">Доля государственного участия, %<span class="req">*</span></label>
					<input type="text" name="reg_govshare" id="reg_govshare" value="" required />
				</div>
			</div>
			
			<div class="form-row clearfix">
				<div class="form-item form-item-50">
					<label for="reg_colleague_post" style="margin-bottom: 21px;">Должность<span class="req">*</span></label>
					<input type="text" name="position" id="reg_colleague_post" value="" required />
				</div>
				<div class="form-item form-item-50">
					<label for="reg_colleague_exp">Стаж работы в компании в указанной должности (лет, мес.)<span class="req">*</span></label>
					<input type="text" name="exp" id="reg_colleague_exp" value="" required />
				</div>
			</div>

			<div class="form-row clearfix">
				<div class="form-item">
					<label for="reg_achievements">Основные достижения на занимаемой позиции за последний год (не более 1500 знаков)<span class="req">*</span></label>
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
					<input type="text" name="email" id="reg_colleague_email" value="" class="email" required />
				</div>
				<div class="form-item form-item-50">
					<label for="reg_colleague_phone">Контактный телефон<span class="req">*</span></label>
					<input type="text" name="phone" id="reg_colleague_phone" value="" class="phone" required />
				</div>
			</div>
            <div class="form-row clearfix">
                <div class="form-item form-item-50">
                    <label for="reg_colleague_phone">Фото</label>
                    <input type="file" name="foto"  class="">
                </div>
            </div>
            <div class="form-row clearfix">
				<div class="form-checkboxes">
					<div class="form-item">
						<label for="reg_agree">
							<input type="checkbox" name="reg_agree" id="reg_agree" required /> <?/*Подтверждаю, что введённая информация достоверна и может быть опубликована в рейтинге «ТОП-1000 Российских Менеджеров»*/?>
							Подтверждаю своё согласие на обработку персональных данных Ассоциацией Менеджеров, а также достоверность предоставленной информации для публикации в рейтинге «ТОП-1000 Российских Менеджеров»
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
<?endif?>
<?if(!isAjax()):?>
</div>
<?endif?>

