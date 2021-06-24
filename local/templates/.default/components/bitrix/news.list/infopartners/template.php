<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>		
	<div class="inf-partners-list clearfix">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>120, 'height'=>80), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
			<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"];?>" class="partners-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<span class="pic">
					<span class="cont">
						<img src="<?=$file["src"];?>" />
					</span>
				</span>
					<span class="descr">
						<span class="cont">
							<p><?=$arItem["NAME"];?></p>
						</span>
					</span>
			</a>
		<?endforeach;?>
	</div>