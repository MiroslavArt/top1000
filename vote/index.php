<?$IsAjax = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' || !empty($_REQUEST['year']);
if ($IsAjax):
	require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
else:
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Голосование");
endif;?>



<?if($IsAjax):?>
	<?


	CModule::includeModule("iblock");
	$vote = new CIBlockElement;

	$PROP = array();
	
	if($_POST["VOTE_NO"] == "on") {
		$PROP[3] = $USER->GetID(); // Голосующий
		$PROP[4] = $_POST["VOTE_ID"]; // За кого отдаем голос
		$PROP[8] = 16; // Не знаю этого кандидата 16-Y
	} else {
		$PROP[3] = $USER->GetID(); // Голосующий
		$PROP[4] = $_POST["VOTE_ID"]; // За кого отдаем голос
		$PROP[5] = $_POST["VOTE_1"]; // Профессионализм управления, значения 1,2,3,4,5
		$PROP[6] = $_POST["VOTE_2"]; // Вклад в развитие компании, значения 6,7,8,9,10
		$PROP[7] = $_POST["VOTE_3"]; // Деловая репутация, значения 11,12,13,14,15
		
	}
	//$PROP[3] = 1; // Голосующий
	//$PROP[4] = 1; // За кого отдаем голос
	//$PROP[5] = 1; // Профессионализм управления, значения 1,2,3,4,5
	//$PROP[6] = 9; // Вклад в развитие компании, значения 6,7,8,9,10
	//$PROP[7] = 11; // Деловая репутация, значения 11,12,13,14,15
	//$PROP[8] = 16; // Не знаю этого кандидата 16-Y

	//$PROP[12] = "Белый";  // свойству с кодом 12 присваиваем значение "Белый"
	//$PROP[3] = 38;        // свойству с кодом 3 присваиваем значение 38

	$voteArray = Array(
	  "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
	  "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
	  "IBLOCK_ID"      => 8,
	  "PROPERTY_VALUES"=> $PROP,
	  "NAME"           => "Голос",
	  //"ACTIVE"         => "Y",            // активен
	);

	if($VOTE_ID = $vote->Add($voteArray)):?>
		<?if($_REQUEST["VOTE_NO"] == "on"):?>
			<div class="vote-result vote-result-2 clearfix">
				<div class="vote-result-ttl">
					Не знаю<br>
					этого<br>
					кандидата
				</div>
				<div class="vote-result-vals">
					<div class="vote-result-val">
						<div class="num">-</div>
					</div>
					<div class="vote-result-val">
						<div class="num">-</div>
					</div>
					<div class="vote-result-val">
						<div class="num">-</div>
					</div>
				</div>
			</div>
		<?else:?>
		<?
		$res = CIBlockElement::GetByID($VOTE_ID);
			if($ar_res = $res->GetNextElement()){
				//echo $ar_res['NAME'];
				$arProps = $ar_res->GetProperties();
				//print_r($ar_res);
			
			}
		
		
		?>
			<div class="vote-result clearfix">
				<div class="vote-result-ttl">
					Результат<br>
					оценки<br>
					кандидата
				</div>
				<div class="vote-result-vals">
					<div class="vote-result-val">
						<div class="num"><?=$arProps["VOTE_1"]["VALUE"];?></div>
					</div>
					<div class="vote-result-val">
						<div class="num"><?=$arProps["VOTE_2"]["VALUE"];?></div>
					</div>
					<div class="vote-result-val">
						<div class="num"><?=$arProps["VOTE_3"]["VALUE"];?></div>
					</div>
				</div>
			</div>
		<?endif;?>
	
	<?
	 // echo "New ID: ".$VOTE_ID;
	  ?>
	<?else:?>
	
	<?
	  //echo "Error: ".$vote->LAST_ERROR;
	?>
	
	<?endif;?>
	
<?endif;?>


<?
if ($IsAjax)
{
	require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
}
else
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
}
?>