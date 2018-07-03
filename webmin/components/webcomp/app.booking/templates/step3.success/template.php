<div class="white_bg box_sm">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 style="text-align: center;margin-top:0px">Đặt xe thành công</h3></div>
            <div class="col-md-12">
                <div class="panel panel-default hidden" >
                    <div class="panel-heading">
                        <h4 class="panel-title bold">Thông tin khách hàng</h4></div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="row">
                                <h5 class="bold">Người đặt</h5></div>
                            <div class="row">Họ Tên: <span
                                        class=" bold"><?= $arResult["BOOKING_INFO"]["CUSTOMER"]["FULL_NAME"] ?></span>
                            </div>
                            <div class="row">Thời gian đặt: <span
                                        class=" bold"><?= $arResult["BOOKING_INFO"]["INFO"]["NGAY_DAT"] ?> </span></div>
                            <div class="row">Số điện thoại: <span
                                        class=" bold"><?= $arResult["BOOKING_INFO"]["CUSTOMER"]["PHONE"] ?></span></div>
                            <div class="row">Địa chỉ: <span
                                        class=" bold"><?= $arResult["BOOKING_INFO"]["INFO"]["DIA_CHI_TRA"] ?></span>
                            </div>
                            <div class="row">Ghi chú: <span
                                        class=" bold"><?= $arResult["BOOKING_INFO"]["INFO"]["GHI_CHU"] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <p>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title bold">THÔNG TIN VÉ</h3></div>
                        <div class="panel-body">
                            <div>

            <p style="font-size: 18px">Mã vé: <?= $arResult["BOOKING_INFO"]["INFO"]["MA_VE"] ?></p>
            <p>Tình trạng: <span class=" bold"><?= $arResult["BOOKING_INFO"]["INFO"]["TRANG_THAI"] ?></span></p>
            <p>Khởi hành: <span class="w50 ilbl"> <span class="view bold">
                                            <?= $arResult["BOOKING_INFO"]["BOOKING"]["THOI_GIAN"] ?></span> <span
                            class="edit hide">
                                            </span>
                                    </span>
            </p>
            <p>Đón khách: <span class=" bold"><?= $arResult["BOOKING_INFO"]["BOOKING"]["DIA_DIEM_DON"] ?></span></p>
            <p>Trả khách: <span class=" bold"><?= $arResult["BOOKING_INFO"]["BOOKING"]["DIA_DIEM_TRA"] ?></span></p>
            <p>Số lượng: <span class=" bold"><?= $arResult["BOOKING_INFO"]["BOOKING"]["SO_LUONG"] ?> Khách</span></p>
            <p>Hình thức thanh toán: <span
                        class=" bold"><?= $arResult["BOOKING_INFO"]["INFO"]["HINH_THUC_TT"]["NAME"] ?></span></p>
            <div style="clear: both"></div>
        </div>
        <br>
        <div class="ticket total_price">
            <h4>Giá vé:</h4>
            <h3 class="bold">
                <? if ($_SESSION["GIA_CU"] > 0) { ?>
                    <span style="text-decoration: line-through;color: #ccc;"><?= number_format($_SESSION["GIA_CU"], 3) ?> </span>
                <? } ?>
                <?= number_format($arResult["BOOKING_INFO"]["BOOKING"]["GIA_CHUAN"]["FORMATED"], 3) ?> đ
            </h3>
        </div>
        <br>
        <div class="ticket total_price" style="background-color:#fd8143;">
            <h4>Hotlite:</h4>
            <h3 class="bold">
                <a href="tel:0945998684" style="color: white;">094.599.8684</a>
            </h3>
        </div>
    </div>
</div>
</div>
<!-- THông tin tài xế chưa dùng đến -->
<!--                <div class="col-md-6">-->
<!---->
<!--                    <div class="panel panel-default">-->
<!--                        <div class="panel-heading">-->
<!--                            <h3 class="panel-title bold">THÔNG TIN LÁI XE</h3> </div>-->
<!--                        <div class="panel-body">-->
<!--                            <p>Tình trạng: <span class=" bold">--><? //=$arResult["BOOKING_INFO"]["BOOKING"]["TRANG_THAI"]?><!--</span> </p>-->
<!--                            <p>Tên lái xe: <span class=" bold">--><? //=$arResult["BOOKING_INFO"]["BOOKING"]["TAI_XE"]["NAME"]?><!--</span></p>-->
<!--                            <p>Điện thoại: <span class=" bold"></span></p>-->
<!--                            <p>Biển số xe: <span class=" bold"></span></p>-->
<!--                            <p>Số chỗ ngồi: <span class=" bold">--><? //=$arResult["BOOKING_INFO"]["BOOKING"]["SO_CHO_NGOI"]?><!-- chỗ</span></p>-->
<!--                            <p>Loại xe: <span class=" bold">--><? //=$arResult["BOOKING_INFO"]["BOOKING"]["HANG_XE"]?><!-- --><? //=$arResult["BOOKING_INFO"]["BOOKING"]["LOAI_XE"]?>
<!--                                (--><? //=$arResult["BOOKING_INFO"]["BOOKING"]["KIEU_XE"]?><!--)-->
<!--                                </span></p>-->
<!--                            <p>Màu: <span class=" bold">--><? //=$arResult["BOOKING_INFO"]["BOOKING"]["MAU_XE"]?><!--</span></p>-->
<!---->
<!---->
<!--                            <hr> <i><div> Lưu ý: Quý khách sẽ nhận được thông tin số điện thoại tài xế và biển số xe sau khi điều hành điều xe,-->
<!--                                    thông thường trước chuyến đi 30-60p.</div> </i> </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<div class="col-md-6" hidden>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title bold">Thông tin khách hàng</h4>
        </div>
        <div class="panel-body">
            <p>Người đặt: <span class=" bold"><?= $arResult["BOOKING_INFO"]["CUSTOMER"]["FULL_NAME"] ?></span>
            </p>
            <p>Họ Tên: <span class=" bold"><?= $arResult["BOOKING_INFO"]["CUSTOMER"]["FULL_NAME"] ?></span></p>
            <p>Thời gian đặt: <span class=" bold"><?= $arResult["BOOKING_INFO"]["INFO"]["NGAY_DAT"] ?> </span></p>
            <p>Số điện thoại: <span class=" bold"><?= $arResult["BOOKING_INFO"]["CUSTOMER"]["PHONE"] ?></span></p>
            <p>Địa chỉ: <span class=" bold"><?= $arResult["BOOKING_INFO"]["INFO"]["DIA_CHI_TRA"] ?></span></p>
            <p>Ghi chú: <span class=" bold"><?= $arResult["BOOKING_INFO"]["INFO"]["GHI_CHU"] ?></span></p>


            <hr>
            <i>
                <div>
                    <span style="color: #0a0a0a;"><i class="fa fa-info-circle"></i> Lưu ý:</span>
                    APKA sẽ gọi điện xác nhận và gửi thông tin số điện thoại tài xế và biển số xe sau 1-3 h đồng hồ ( từ
                    8h sáng đến 21h đêm) hoặc vào ngày làm việc tiếp theo nếu ngoài giờ.
                    <br>
                    Trong trường hợp APKA chưa kịp liên hệ, bạn vui lòng gọi theo số Hotline để được trợ
                    giúp.
                    <br>
                    Trân trọng cảm ơn!
                </div>
            </i></div>
    </div>

</div>
</div>
<style>
    .why_us {
        line-height: 27px;
        margin-top: 10px;
        font-style: italic;
        font-weight: 200;
        border: solid 1px #ccc;
        clear: both;
    }

    .why_us .title {
        font-size: 18px;
        color: #0288d1;
    }
</style>
<div class="col-md-12" hidden>
    <div class="check_datxe why_us" style="font-size: 150%">
        <p class="bold title"><i class="fa fa-info-circle"> </i> Lưu ý: </p>
        - Nếu quý khách cung câp đầy đủ thông tin chuyến bay, chúng tôi đảm bảo vẫn sẽ đón quý khách nếu quý khách bị
        chậm chuyến.
        <br>- Apka.vn cam kết chất lượng dịch vụ, chất lượng lái xe cho những chuyến đi đặt tại Apka.vn. Chúng tôi không
        cam kết chất lượng dịch vụ, các điều khoản bồi thường nếu quý khách đặt xe trực tiếp với lái xe.
    </div>
</div>
<div class="col-md-12 box_md">
    <h3 style="text-align: center">Cảm ơn quý khách đã sử dụng dịch vụ của apka.vn</h3>
    <div style="text-align: center;">

        <div class="col-md-3 padding_top" style="float: none; display: inline-block;"><a class="btn btn_blue" href="/app/app">Đặt
                chuyến khác</a></div>
        <div style="float: none; display: inline-block; color:#fff" class="col-md-3 padding_top hidden"><a href="/"
                                                                                                           style="color: #fff;"
                                                                                                           class="btn btn-danger cancel_booking">Huỷ
                đặt xe</a></div>
    </div>
</div>
</div>
</div>
</div>