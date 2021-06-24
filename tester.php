<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");


$contactsGroupID = 6;

if(in_array($contactsGroupID, CUser::GetUserGroup($arParams["refereal"]))) {
	echo "юзер - контакт";
} else {
	echo "юзер - участник";
}

$arParams["refereal"] = 7734;
$rsUser = CUser::GetByID($arParams["refereal"]);
$arUser = $rsUser->Fetch();
//echo "<pre>";print_r($arUser);echo"</pre>";
$arFields["UF_DYNAMICS_INCOME_1"]   = $arUser["UF_DYNAMICS_INCOME_1"]; // Динамика выручки
$arFields["UF_DYNAMICS_INCOME_2"]   = $arUser["UF_DYNAMICS_INCOME_2"]; // Динамика прибыли
$arFields["UF_DYNAMICS_PEOPLE"]     = $arUser["UF_DYNAMICS_PEOPLE"];   // Динамика численности персонала
$arFields["UF_DYNAMICS_GOVSHARE"]   = $arUser["UF_DYNAMICS_GOVSHARE"]; // Доля государственного участия
$arFields["UF_DEPARTMENT"]  = $arUser["UF_DEPARTMENT"]; // отрасль
$arFields["UF_COMPANYADDRESS"]   = $arUser["UF_COMPANYADDRESS"]; // компания
 



echo "<pre>";print_r($arFields);echo"</pre>";
?>