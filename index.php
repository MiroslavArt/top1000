<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("keywords", "рейтинг, топ-1000 российских менеджеров");
$APPLICATION->SetPageProperty("description", "Ежегодный рейтинг существует с 2001 года. Его главный принцип — лучшие выбирают лучших. Он составляется на основе голосования и публикуется на страницах газеты «Коммерсантъ».");
$APPLICATION->SetPageProperty("TITLE", "Ежегодный рейтинг «ТОП-1000 российских менеджеров»");
$APPLICATION->SetTitle("Главная");
?><!-- Главный слайдер --> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mainSlider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?> <!-- Главный слайдер END --> <?/*
	<div class="home-block home-block-appeal">
		<div class="center-wrapper">
			<div class="block-content">
				<h3>Обращение президента Ассоциации менеджеров</h3>
				<h2><span>Владимира Сенина</span></h2>
				<div class="appeal-wrapper">
					<div class="clearfix">
						<div class="pic">
 <img src="/files/appeal-pic.jpg">
						</div>
						<div class="descr">
							<p>
								 Уже 15 лет Рейтинг&nbsp;«ТОП-1000 российских менеджеров», рассчитываемый Ассоциацией менеджеров, является главным ориентиром&nbsp;качества управления в профессиональной среде менеджеров. Победителями становятся лучшие из лучших российских менеджеров, с их именами связаны успехи компаний и развитие отраслей нашей экономики.
							</p>
							<p>
								 Ассоциация&nbsp;менеджеров запускает онлайн-формат участия в Рейтинге «ТОП-1000 российских менеджеров», и я рад приветствовать вас на нашем обновленном сайте. Здесь вы можете не только зарегистрировать себя или своих коллег, но и наблюдать за дальнейшими этапами работы по определению рейтинга, получать свежие новости о мероприятиях в рамках этого проекта, уточнять данные через личный кабинет. Я также хочу сообщить, что в этом году появились новые номинации, совершенствовалась методика расчетов. Уверен, что онлайн-формат взаимодействия выведет процесс работы над рейтингом на новый уровень прозрачности и объективности.
							</p>
							<p>
								 Я приглашаю вас к участию в рейтинге и желаю, чтобы и ваши имена оказались в первых строчках Рейтинга «ТОП-1000 российских менеджеров» 2015 года. Успехов!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	*/?> <!-- О рейтинге --> <a class="anchor" name="about"></a> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mainAbout",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "3",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?> <!-- О рейтинге END --> <!-- Этапы проведения конкурса --> <a class="anchor" name="stages"></a>
<div class="home-block home-block-stages">
	<div class="center-wrapper">
		<div class="block-content">
			<h2>Этапы проведения проекта</h2>
			<div class="home-stages clearfix">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"mainStages", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "5",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "mainStages",
		"SET_LAST_MODIFIED" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
			</div>
			<div class="home-dl clearfix">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"mainDl1",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "43",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "main",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(0=>"",1=>"FILE",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"USE_PERMISSIONS" => "N"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"mainDl2",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "44",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "main",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(0=>"",1=>"FILE",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"USE_PERMISSIONS" => "N"
	)
);?>
			</div>
		</div>
	</div>
</div>
 <!-- Этапы проведения конкурса END --> <!-- Организатор и партнеры --> <a class="anchor" name="partners"></a>
<div class="home-block home-block-partners">
	<div class="center-wrapper">
		<div class="block-content">
			<div class="home-partners clearfix">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/main-organizator.php"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/main-partners.php"
	)
);?>
			</div>
		</div>
	</div>
</div>
 <?
//Ниже поменял условие чтобы выключить регистрацию 
//Изначально было "if(STATE == "REGISTRATION"):"

?>  <!-- Организатор и партнеры END --> <!-- Регистрация участников --> 
<a class="anchor" name="register"></a>
<div class="home-block home-block-register">
	<div class="block-content">
		<h2>Регистрация участников на 2021 год</h2>
		<div class="tabbed-content register-tabs">
			<div class="center-wrapper">
				<div class="tabs">
					<div class="clearfix">

                        <div class="tab" rel="reg_form">
							 Online регистрация участника
						</div>

						<div class="tab" rel="reg_dl">
							 Скачать форму регистрации
						</div>
					</div>
				</div>
				<div class="tabs-content">
					<div class="tab-content" rel="reg_form">
						 <!-- Форма регистрации -->
						<div class="reg-steps clearfix">
							 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/reg-step-1.php"
	)
);?>
                             <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/reg-step-2.php"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/reg-step-3.php"
	)
);?>

						</div>
						<div class="reg-form-wrapper clearfix">
							 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/reg-descr.php"
	)
);?>


                            <!-- Формы --> <?$APPLICATION->IncludeComponent(
	"renart:user.add.form",
	"form1new",
Array()
);?> <?$APPLICATION->IncludeComponent(
	"renart:user.add.form",
	"form2new",
Array()
);?> <?$APPLICATION->IncludeComponent(
	"renart:user.add.form",
	"form3new",
Array()
);?> <!-- Формы END -->
						</div>
						 <!-- Форма регистрации END -->
					</div>
					<div class="tab-content" rel="reg_dl">
						<div class="reg-dl clearfix">
							 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/reg-dl-1.php"
	)
);?>
							<div class="reg-dl-item">
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/reg-dl-2.php"
	)
);?>
							</div>
							<div class="reg-dl-item">
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/reg-dl-3.php"
	)
);?>
							</div>
						</div>
						<div class="reg-dl-button-wrapper">
							 <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"mainDlForm",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "45",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "main",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(0=>"",1=>"FILE",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"USE_PERMISSIONS" => "N"
	)
);?>

<!--                            <br><br>-->
<!--                            <div style="border: solid #4b5054 1px; padding: 20px 8px;">-->
<!--                                Уважаемые коллеги,-->
<!--                                в данный момент онлайн-регистрация на рейтинг <strong> «ТОП-1000»</strong> недоступна по техническим причинам.<br>-->
<!--                                Для подачи заявки необходимо скачать форму регистрации в word, заполнить и направить ее на <strong>e-mail: <a style="color: #4b5054" href="mailto:I.Kondratieva@amr.ru">I.Kondratieva@amr.ru</a></strong>-->
<!--                                <br>По вопросам регистрации обращайтесь к <strong>Кондратьевой Ирине: <a style="color: #4b5054" href="tel:+79262391414">+7 (926) 239 14-14</a></strong>-->
<!--                            </div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <!-- Регистрация участников END -->  <!-- Новости проекта --> <a class="anchor" name="news"></a> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mainNews",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "3",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"DATE_VIEW",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
<div class="home-block">
	<div class="block-content">
		<h2>Информационные партнеры</h2>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"infopartners",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "55",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"LINK",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
 <!-- Новости проекта END --> <!-- Контакты --> <a class="anchor" name="contacts"></a>
<div class="home-block home-block-contacts">
	<div class="center-wrapper">
		<div class="block-content">
			<h2>Контакты</h2>
			<div class="contacts clearfix">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/contacts-l.php"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/contacts-r.php"
	)
);?>
			</div>
			<div class="contacts-map" id="contactsMap">
			</div>
		</div>
	</div>
</div>
			<!-- Контакты END --><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>