<?


$arFilter = Array(
   "IBLOCK_ID"=>$arResult["IBLOCK_ID"],  //10 - id ��������� (������������ ����)
   ">ID"=>$arResult["ID"],       //$id - id ������� �������
);
$res = CIBlockElement::GetList(Array("ID"=>"ASC"), $arFilter, Array("ID","CODE"));
if ($ar_fields = $res->GetNext()) {
    //echo "<a href=detail.php?id=".$ar_fields[ID].">��������� �������</a>";
	$arResult["NEXT_NEWS_ELEMENT"] = $ar_fields;
}
$arFilter = Array(
   "IBLOCK_ID"=>$arResult["IBLOCK_ID"],  //10 - id ��������� (������������ ����)
   "<ID"=>$arResult["ID"],       //$id - id ������� �������
);
$res = CIBlockElement::GetList(Array("ID"=>"DESC"), $arFilter, Array("ID","CODE"));
if ($ar_fields = $res->GetNext()) {
	$arResult["PREV_NEWS_ELEMENT"] = $ar_fields;
}
?>