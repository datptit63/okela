<?
class CTinTuc{

    function getListTinTuc(){
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID"=>IntVal(IB_TIN_TUC), "ACTIVE"=>"Y");
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
        while($ob = $res->GetNextElement()){
            $arFields = $ob->GetFields();
            $arFields['PROPERTIES'] = $ob->GetProperties();
            $arResult[] = $arFields;

        }
        return $arResult;
    }

}
?>