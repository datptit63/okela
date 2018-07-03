<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
session_start();
global $TrangThai_DonHang;
global $TrangThai_LaiXe;
$_SESSION["BOOKING"]['STEP'] = 3;


if($_POST["payment_method_id"] > 0 && count($_SESSION["BOOKING"]['CUSTOMER']) > 0 &&
    count($_SESSION["BOOKING"]['INFO']) > 0
){
	//đăng ký tài khoản
	if($_SESSION["BOOKING"]['CUSTOMER']['DANG_KY_THANH_VIEN'] == 1){
		global $USER;
		$arUser = $USER->Register($_SESSION["BOOKING"]['CUSTOMER']['USERNAME'], $_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME'], "", $_SESSION["BOOKING"]['CUSTOMER']['PASSWORD'], $_SESSION["BOOKING"]['CUSTOMER']['PASSWORD'], $_SESSION["BOOKING"]['CUSTOMER']['EMAIL']);
		if($arUser['TYPE']=='ERROR'){
			$rsResult['success'] = false;
			$rsResult['error_text'] = $arUser['MESSAGE'];
		}
	}

	if(!$rsResult['error_text']) {
		//Add vao thong tin chuyen di
		$code = strtoupper( CUtilities::getToken( 8 ) );
		foreach ( $_SESSION["BOOKING"]['INFO'] as $key => $value ) {
			$proChuyenDi[$key] = $value;
		}

		$proChuyenDi["TRANG_THAI"] = $TrangThai_LaiXe["chua_bat_dau"];

		$chuyenDiId = CUtilities::add_new_element( IB_THONG_TIN_CHUYEN, $code, $proChuyenDi );

		//Add vao khach hang
		if ( $GLOBALS["USER"]->GetID() > 0 ) {
			$proKhachHang['USER_ID'] = $GLOBALS["USER"]->GetID();
		} else {
			$proKhachHang['USER_ID'] = USER_ID_GUEST;
		}
		$proKhachHang['PHONE']     = $_SESSION["BOOKING"]['CUSTOMER']['PHONE'];
		$proKhachHang['EMAIL']     = $_SESSION["BOOKING"]['CUSTOMER']['EMAIL'];
		$proKhachHang['FULL_NAME'] = $_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME'];
		$customerId                = CUtilities::add_new_element( IB_KHACH_HANG, $code, $proKhachHang );

		//Add vao Dat xe
		if ( $chuyenDiId > 0 && $customerId > 0 ) {
			$proDatXe['CHUYEN_ID']     = $chuyenDiId;
			$proDatXe['KHACH_HANG_ID'] = $customerId;
			$proDatXe['HINH_THUC_TT']  = $_POST['payment_method_id'];
			$proDatXe['TRANG_THAI']    = $TrangThai_DonHang["Confirm"];
			foreach ( $_SESSION["BOOKING"]['CUSTOMER'] as $key => $value ) {
				$proDatXe[ $key ] = $value;
			}
			$bookingId = CUtilities::add_new_element( IB_DAT_XE, $code, $proDatXe );
			$name = urlencode($_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME']);
            $diaDiemDon = urlencode($_SESSION["BOOKING"]['INFO']['DIA_DIEM_DON']);
            $diaDiemTra = urlencode($_SESSION["BOOKING"]['INFO']['DIA_DIEM_TRA']);
            $ngaykhoihanh = urlencode($_SESSION["BOOKING"]['INFO']['THOI_GIAN']);
            $gia = $_SESSION["BOOKING"]['INFO']['GIA_CHUAN'];
            $soDienThoai = urlencode($_SESSION["BOOKING"]['CUSTOMER']['PHONE']);




            if ( $bookingId > 0 ) {
				//Add to dieu phoi
                $arUpdateresult = json_decode(file_get_contents('http://doitac.apkin.vn/wsdl/dat-xe/test.php?tenKhachHang='.$name.'&SoDienThoai='.$soDienThoai.'&DiaDiemDon='.$diaDiemDon.'&DiaDiemTra='.$diaDiemTra.'&ngayKhoiHanh='.$ngaykhoihanh.'&gia='.$gia), true);
                unset( $_SESSION["BOOKING"] );
                unset( $_SESSION['GIA_CHUA_KHUYEN_MAI'] );
                unset( $_SESSION["GIA"] );
				$rsResult['success']    = true;
				$rsResult["Booking_id"] = $bookingId;
			}
		}
	}



}else{
    $rsResult['success'] = false;
    $rsResult['error_text'] = "Hệ thống đang bận vui lòng thử lại sau";

}

$json = json_encode($rsResult);
echo $json;
exit();
?>