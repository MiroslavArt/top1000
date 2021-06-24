
										<div class="common-form reg-form" rel="reg-form-2" style="display:none;">
											<h3>Регистрация коллег из своей компании</h3>
											<form action="." class="reg-form-colleague">
											<input type="hidden" name="REG_COL" value="Y">
											<input type="hidden" name="FORM" value="form2">
											<input type="hidden" name="REFEREAL" id="form2_refereal" value="">
											
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
												<div class="form-row clearfix">
													<div class="form-item">
														<label for="reg_colleague_company">Компания<span class="req">*</span></label>
														<input type="text" name="company_view" id="reg_colleague_company" disabled value=""/>
														<input type="hidden" name="company_other" id="reg_colleague_company_hidden" value=""/>
													</div>
												</div>
												<div class="form-row clearfix">
													<div class="form-item">
														<label for="reg_colleague_post">Должность<span class="req">*</span></label>
														<input type="text" name="position" id="reg_colleague_post" value="" required />
													</div>
												</div>
												<div class="form-row clearfix">
													<div class="form-item form-item-50">
														<label for="reg_colleague_email">E-mail<span class="req">*</span></label>
														<input type="text" name="mail" id="reg_colleague_email" value="" class="email" required />
													</div>
													<div class="form-item form-item-50">
														<label for="reg_colleague_phone">Контактный телефон<span class="req">*</span></label>
														<input type="text" name="phone" id="reg_colleague_phone" value="" class="phone" required />
													</div>
												</div>
												<div class="form-footer">
													<div class="form-footer-top">
														<input type="submit" value="Зарегистрировать коллегу" class="button button-1" />
														<button class="button button-add" disabled >Добавить сотрудника</button>
													</div>
													<div class="button button-continue"><span>перейти к этапу 3</span></div>
												</div>
											</form>
										</div>
										

