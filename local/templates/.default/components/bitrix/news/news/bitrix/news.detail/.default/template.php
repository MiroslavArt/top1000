<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


					<div class="article clearfix">
						
						<div class="article-sidebar">
						
						<?if($arResult["PROPERTIES"]["DATE_VIEW"]["VALUE"]):?>
									<div class="article-date">
									
										<div class="day">
											<?
											echo FormatDate("d",MakeTimeStamp($arResult['PROPERTIES']["DATE_VIEW"]["VALUE"]));
											?>
										</div>
										<div class="month-year">
											<?
											echo FormatDate("m.y",MakeTimeStamp($arResult['PROPERTIES']["DATE_VIEW"]["VALUE"]));
											?>
										</div>
									</div>
									<?endif;?>
							
							<div class="article-share-buttons">
								<script type="text/javascript">(function() {
								if (window.pluso)if (typeof window.pluso.start == "function") return;
								if (window.ifpluso==undefined) { window.ifpluso = 1;
									var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
									s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
									s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
									var h=d[g]('body')[0];
									h.appendChild(s);
								}})();</script>
							<div class="pluso" data-background="transparent" data-options="big,round,line,vertical,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google"></div>
							</div>
							
						</div>
						
						<div class="article-content">
							
							<h1><?=$arResult["NAME"];?></h1>
							<?if($arResult["DETAIL_PICTURE"]["SRC"]):?>
								<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"];?>" />
							<?endif;?>
							<?=$arResult["DETAIL_TEXT"];?>
							
						</div>
						
						<div class="article-footer">
							<div class="article-nav clearfix">
								<a href="/news/" class="back-link">Назад к списку новостей</a>
								<?if($arResult["NEXT_NEWS_ELEMENT"]["CODE"]):?>
								<a href="/news/<?=$arResult["NEXT_NEWS_ELEMENT"]["CODE"];?>/" class="article-nav-next">Следующая запись</a>
								<?endif;?>
								<?if($arResult["PREV_NEWS_ELEMENT"]["CODE"]):?>
								<a href="/news/<?=$arResult["PREV_NEWS_ELEMENT"]["CODE"];?>/" class="article-nav-prev">Предыдущая запись</a>
								<?endif;?>
								<?//echo"<pre>";print_r($arResult);echo"</pre>";?>
							</div>
						</div>
						
					</div>
					
<?/*
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
*/?>