<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
session_start();

$giaDi = $_POST['GIA_XE_DI'];
$giaVe = $_POST['GIA_XE_VE'];
$giaKmDi = $_POST['GIA_KM_DI'];
$giaKmVe = $_POST['GIA_KM_VE'];
$giaTronGoiDi = $_POST['GIA_TRON_GOI_DI'];
$giaTronGoiVe = $_POST['GIA_TRON_GOI_VE'];
$booktype = $_POST['type_book'];
$khoangcach = $_POST['Km'];
$maKhuyenMai = $_POST['ma_khuyen_mai'];
//luu ma khuyen mai
$_SESSION['MA_KHUYEN_MAI'] =  $maKhuyenMai;




$khoangCachMoCua = 26;
$khoangCachTronGoi = 33;
$giodem = 22;
$phutdem = 30;
$giosang = 5;
$phutsang = 30;

$searchTimeFormat = CIBlockFormatProperties::DateFormat("m/d/Y H:i", MakeTimeStamp($_POST["TIME"], CSite::GetDateFormat()));
$date = new DateTime($searchTimeFormat);
$hours = $date->format('H');
$minutes = $date->format('i');

//Get ma khuyen mai
$arSelect = Array(
    'ID',
    'NAME',
    'IBLOCK_ID',
    'PROPERTY_CODE',
    'PROPERTY_GIA'
);
$arFilter = Array("IBLOCK_ID" => 15);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($rs = $res->Fetch())
{
    $list[] = $rs; //Список элементов
    $listCode[] = $rs['PROPERTY_CODE_VALUE']; //Список элементов

};


$giaKhuyeMai = 0;

foreach ($listCode as $key => $item)
{
    if(strtoupper($item) == strtoupper($maKhuyenMai))
    {
        $giaKhuyeMai =  $list[$key]['PROPERTY_GIA_VALUE'];
    }
}



$arr = array();

if($booktype == 'airport'){

    foreach($giaKmVe as $key => $value)
    {
        if($khoangcach > $khoangCachMoCua )
        {
            $gia = $giaVe[$key] + ($khoangcach - $khoangCachMoCua) * $value;

            if($gia > $giaTronGoiVe[$key] && $khoangcach < $khoangCachTronGoi)
            {
                $gia = $giaTronGoiVe[$key];
            }
        }else
        {
            $gia = $giaVe[$key];
        }


        if($hours > $giodem || $hours < $giosang )
        {
            $gia = $gia + 30000;
        }

        $gia = round($gia/1000);


        if($giaKhuyeMai > 0)
        {
            $_SESSION['GIA_CHUA_KHUYEN_MAI'][$key] =  $gia;
            $arr['GIA_CHUA_KHUYEN_MAI'][$key] = number_format($gia,3);
            
            $gia = $gia - $giaKhuyeMai;
            $arr['GIA'][$key] = number_format($gia,3);

        }

        $_SESSION["GIA"][$key] = $gia;
        $arr['GIA'][$key] = number_format($gia,3);
    }
}else
{
    foreach($giaKmDi as $key => $value)
    {
        if($khoangcach > $khoangCachMoCua)
        {
            $gia = $giaDi[$key] + ($khoangcach - $khoangCachMoCua) * $value;
            if($gia > $giaTronGoiDi[$key] && $khoangcach < $khoangCachTronGoi)
            {
                $gia = $giaTronGoiDi[$key];
            }
        }else
        {
            $gia = $giaDi[$key];
        }

        if($hours > $giodem || $hours < $giosang )
        {
            $gia = $gia + 30000;
        }


            $gia = round($gia/1000);

        if( $giaKhuyeMai > 0)
        {
            $_SESSION['GIA_CHUA_KHUYEN_MAI'][$key] =  $gia;
            $arr['GIA_CHUA_KHUYEN_MAI'][$key] = number_format($gia,3);

            $gia = $gia - $giaKhuyeMai;
            $arr['GIA'][$key] = number_format($gia,3);
        }

        $_SESSION["GIA"][$key] = $gia;

        $arr['GIA'][$key] = number_format($gia,3);;
    }

}

$json = json_encode($arr);
echo $json;
exit();
?>