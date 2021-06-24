<?

//получаем юзера


			if ($USER->GetID()) {
				//localRedirect("/profile/");
				$rsUser = CUser::GetByID($USER->GetID());
				$arUser = $rsUser->Fetch();
				$photo = CFile::ResizeImageGet($arUser["PERSONAL_PHOTO"], array('width'=>220, 'height'=>220), BX_RESIZE_IMAGE_EXACT, true);
				//$arPhoto = CFile::GetByID($arUser["PERSONAL_PHOTO"]);
				//$photo = $arPhoto->Fetch();
				//echo "<pre>"; print_r($arUser); echo "</pre>";
				//echo "<pre>"; print_r($photo); echo "</pre>";
				CModule::includeModule("iblock");
				$arResult["COMPANY"] = $arUser["WORK_COMPANY"];
				$arResult["CURRENT_USER"] = $arUser["ID"];
			} else {
				localRedirect("/");
			}
			?>