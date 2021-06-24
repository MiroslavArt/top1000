<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?//localRedirect("/profile/");?>
<?
if(STATE == "VOTING") {
	localRedirect("/profile/"); 
}
?>
<div class="tabbed-content register-tabs register-tabs-inner">
	<div class="center-wrapper">
		<div class="tabs">
			<div class="clearfix">
				<div class="tab" rel="reg_1">
					 Регистрация коллег из своей компании
				</div>
				<div class="tab" rel="reg_2">
					 Регистрация коллег из других компаний
				</div>
			</div>
		</div>
		<div class="tabs-content">
			<div class="tab-content" rel="reg_1">
				 <!-- Форма регистрации -->
				<div class="reg-form-wrapper clearfix">
					<div class="reg-descr">
						<p>
							 Чтобы зарегистрироваться в качестве кандидата рейтинга «ТОП-1000 российских менеджеров», пожалуйста, заполните анкету.
						</p>
						<p>
							 Обязательные поля отмечены звёздочкой. Регистрация проходит в 3 этапа, обязательной является регистрация только самого кандидата рейтинга.
						</p>
					</div>
					 <!-- Формы --> <?$APPLICATION->IncludeComponent(
	"renart:user.add.form",
	"form4new",
Array()
);?> <!-- Формы END -->
				</div>
				 <!-- Форма регистрации END -->
			</div>
			<div class="tab-content" rel="reg_2">
				 <!-- Форма регистрации -->
				<div class="reg-form-wrapper clearfix">
					<div class="reg-descr">
						<p>
							 Чтобы зарегистрироваться в качестве кандидата рейтинга «ТОП-1000 российских менеджеров», пожалуйста, заполните анкету.
						</p>
						<p>
							 Обязательные поля отмечены звёздочкой. Регистрация проходит в 3 этапа, обязательной является регистрация только самого кандидата рейтинга.
						</p>
					</div>
					 <!-- Формы --> <?$APPLICATION->IncludeComponent(
	"renart:user.add.form",
	"form5new",
Array()
);?> <!-- Формы END -->
				</div>
				 <!-- Форма регистрации END -->
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>