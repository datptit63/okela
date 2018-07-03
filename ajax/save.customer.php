<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>

<?
session_start();
$_SESSION["BOOKING"]['STEP'] = 3;
$arError                     = array();
$rsResult['success']         = true;
if ( $_POST["fullname"] == "" || $_POST["phone"] == ""  ) {
	$rsResult['success'] = false;
	$arError[]           = "Vui lòng nhập đầy đủ thông tin vào ô viền đổ";
}

if ( ! preg_match( '/(09|01[2|6|8|9])+([0-9]{8,9})$/', $_POST['phone'] ) ) {
    $rsResult['success'] = false;
    $arError[]           = 'Vui lòng nhập lại số điện thoai(không nhập dấu cách)';
}

/*validate: đăng ký tài khoản*/
if ( $_POST['khtx'] == 1 ) {
	if ( $_POST['username'] == '' || $_POST['password'] == '' || $_POST['password_confirm'] == '' || $_POST['email'] == '' ) {
		if ( $_POST['email'] == '' ) {
			$arError[] = "Vui lòng nhập Email để đăng ký tài khoản";
		} elseif ( count( $arError ) == 0 ) {
			$arError[] = "Vui lòng nhập đầy đủ thông tin";
		}
		$rsResult['success'] = false;
	} else {
		if ( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
			$rsResult['success'] = false;
			$arError[]           = 'Định dạng email không đúng';
		} else {
			/*
			$filter  = Array
			(
				"EMAIL" => $_POST['email'],
			);
			$rsUsers = CUser::GetList( null, ( $order = "desc" ), $filter ); // select users
			$rsUsers->NavStart(1);
			if ( $rsUsers->NavNext( true, "f_" ) ) {
				$rsResult['success'] = false;
				$arError[]           = 'Email bạn nhập đã được dùng để đăng ký tài khoản, vui lòng đổi email khác';
			}
			*/
		}
		if ( strlen( $_POST['username'] ) < 3 || ! preg_match( '/^[a-z0-9-]+$/', $_POST['username'] ) ) {
			$rsResult['success'] = false;
			$arError[]           = 'Tên tài khoản phải > 3 ký tự và chỉ chứa các chữ cái a-z và số 0-9';
		}
		if ( strlen( $_POST['password'] ) < 6 ) {
			$rsResult['success'] = false;
			$arError[]           = 'Mật khẩu phải lớn hơn 6 ký tự';
		} elseif ( $_POST['password'] != $_POST['password_confirm'] ) {
			$rsResult['success'] = false;
			$arError[]           = 'Nhập lại mật khẩu không đúng';
		}
	}

}
if ( count( $arError ) > 0 ) {
	$rsResult['error_text'] = implode( '<br/>', $arError );
}
if ( $rsResult['success'] ) {
	$_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME']          = $_POST['fullname'];
	$_SESSION["BOOKING"]['CUSTOMER']['PHONE']              = $_POST['phone'];
	$_SESSION["BOOKING"]['CUSTOMER']['EMAIL']              = $_POST['email'];
	$_SESSION["BOOKING"]['CUSTOMER']['DIA_CHI_TRA']        = $_POST['address'];
	$_SESSION["BOOKING"]['CUSTOMER']['GHI_CHU']            = $_POST['comment'];
	$_SESSION["BOOKING"]['CUSTOMER']['DANG_KY_THANH_VIEN'] = $_POST['khtx'];
    $_SESSION["BOOKING"]['CUSTOMER']['MA_KHUYEN_MAI'] = $_POST['makhuyenmai'];

	$_SESSION["BOOKING"]['CUSTOMER']['USERNAME']        = $_POST['username'];
	$_SESSION["BOOKING"]['CUSTOMER']['PASSWORD']            = $_POST['password'];
	$_SESSION["BOOKING"]['CUSTOMER']['PASSWORD_CONFIRM'] = $_POST['password_confirm'];
}


// Bo qua man thanh toan
if( count($_SESSION["BOOKING"]['CUSTOMER']) > 0 &&
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
            $DiaDiemTra = urlencode($_SESSION["BOOKING"]['INFO']['DIA_DIEM_TRA']);
            $ngaykhoihanh = urlencode($_SESSION["BOOKING"]['INFO']['THOI_GIAN']);
            $endDate = urlencode($_SESSION["BOOKING"]['INFO']['THOI_GIAN_END']);
            $gia = $_SESSION["BOOKING"]['INFO']['GIA_CHUAN'];
            $maKhuyenMai= $_SESSION['MA_KHUYEN_MAI'];





            if ( $bookingId > 0 ) {
                //Add to dieu phoi
                $arUpdateresult = json_decode(file_get_contents('http://doitac.apkin.vn/wsdl/dat-xe/test.php?tenKhachHang='.$name.'&SoDienThoai='.$_SESSION["BOOKING"]['CUSTOMER']['PHONE'].'&DiaDiemDon='.$diaDiemDon.'&diaDiemTra='.$DiaDiemTra.'&ngayKhoiHanh='.$ngaykhoihanh.'&gia='.$gia.'&endDate='.$ngaykhoihanh.'&maKhuyenMai='.$maKhuyenMai), true);
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
//    $rsResult['error_text'] = "Vui lòng nhập đầy đủ thông tin ";
//    $rsResult['error_text'] = "Hệ thống đang bận vui lòng thử lại sau";

}


$json = json_encode( $rsResult );
echo $json;
exit();
?>