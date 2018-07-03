<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>

<?
session_start();

$date = str_replace('/', '-', $_POST['TIME']);
$endDate =  date('d/m/y H:i:s', (strtotime($date)+3600));

$rsResult = $_POST['PROPERTY'][$_POST['select']];

$_SESSION["BOOKING"]['INFO']['DIA_DIEM_DON'] = $rsResult['DIEM_DI'];
$_SESSION["BOOKING"]['INFO']['DIA_DIEM_TRA'] = $rsResult['DIEM_DEN'];
$_SESSION["BOOKING"]['INFO']['THOI_GIAN'] = $_POST['TIME'];
$_SESSION["BOOKING"]['INFO']['THOI_GIAN_END'] = $endDate;
$_SESSION["BOOKING"]['INFO']['SO_CHO_NGOI'] = $rsResult['SO_CHO'];
$_SESSION["BOOKING"]['INFO']['GIA_CHUAN'] =  $_SESSION["GIA"][$_POST['select']];
$_SESSION['GIA_CU'] = 0;
if(isset($_SESSION['GIA_CHUA_KHUYEN_MAI'][$_POST['select']]))
{
    $_SESSION['GIA_CU'] = $_SESSION['GIA_CHUA_KHUYEN_MAI'][$_POST['select']];
}


$_SESSION["BOOKING"]['STEP'] = 2;

$json = json_encode($rsResult);
echo $json;
exit();
?>