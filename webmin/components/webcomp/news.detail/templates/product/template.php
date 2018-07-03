<script src="<?=SITE_TEMPLATE_PATH?>/js/readmore.min.js?v=2017100916"></script>
<div class="detail-reorder" style="background-color: white;">
    <div class="name-xe"><?=$arResult['NAME']?></div>
    <? Cdebug::dump($arResult);?>
    <div class="row m0 mt15 m-15mb">
        <div class="col-xs-12 col-sm-8 p0 pr10 p0mb">
            <div class="slider-detail" id="div-1st">
                <div class="sub-page">
                    <div class="container">
                        <div class="sub-page-content">
                            <div class="row">
                                <div class="col-lg-content">
                                    <div class="car-slider">
                                        <div class="sync-slider">
                                            <div class="slider-show">
                                                <?foreach ($arResult['PROPERTIES']['HINH_ANH_KHAC']['VALUE'] as $id){
                                                    $logoResized800 = CFile::ResizeImageGet($id, array("width" => 800, "height" => 800),1);
                                                    $logoResized160[] = CFile::ResizeImageGet($id, array("width" => 160, "height" => 160),1);
                                                    ?>
                                                    <div class="item">
                                                        <div class="img-wrap"><img src="<?=$logoResized800['src']?>"
                                                                                   alt="<?=$arResult['NAME']?>" title="<?=$arResult['NAME']?>"></div>
                                                    </div>
                                                <?}?>
                                            </div>
                                            <div class="slider-control hidden-xs">
                                                <?
                                                $index =0;
                                                foreach ($logoResized160 as $item){
                                                    ?>
                                                    <div class="item"><a class="img-wrap" data-index="<?=$index?>" href="javascript:void(0);">
                                                            <img src="<?=$item['src']?>" alt="<?=$arResult['NAME']?>" title="<?=$arResult['NAME']?>"></a></div>
                                                    <?$index++;}?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-content">
                <div class="car-intro show-icons">
                    <div class="full-content" id="tab-car-info">
                        <div class="item" style="    font-size: 13px;
    line-height: 25px">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="car-detail-table">
                                        <div class="line"><div class="line-label">Tình trạng</div><div class="line-value"><?=$arResult['PROPERTIES']['TINH_TRANG']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Nhãn hiệu</div><div class="line-value"><?=$arResult['PROPERTIES']['NHAN_HIEU']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Model</div><div class="line-value"><?=$arResult['PROPERTIES']['MODEL']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Số loại</div><div class="line-value" style="white-space: nowrap;"><?=$arResult['PROPERTIES']['SO_LOAI']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Xuất xứ</div><div class="line-value"><?=$arResult['PROPERTIES']['XUAT_XU']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Năm sản xuất</div><div class="line-value"><?=$arResult['PROPERTIES']['NAM_SAN_XUAT']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Màu xe</div><div class="line-value"><?=$arResult['PROPERTIES']['MAU_XE']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Màu nội thất</div><div class="line-value"><?=$arResult['PROPERTIES']['MAU_NOI_THAT']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Kiểu dáng</div><div class="line-value"><?=$arResult['PROPERTIES']['KIEU_DANG']['VALUE']?></div></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="car-detail-table">
                                        <div class="line"><div class="line-label">Số chỗ ngồi</div><div class="line-value"><?=$arResult['PROPERTIES']['SO_CHO_NGOI']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Số cửa</div><div class="line-value"><?=$arResult['PROPERTIES']['SO_CUA']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Dẫn động</div><div class="line-value"><?=$arResult['PROPERTIES']['DAN_DONG']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Nhiên liệu</div><div class="line-value"><?=$arResult['PROPERTIES']['NHIEN_LIEU']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Hộp số</div><div class="line-value"><?=$arResult['PROPERTIES']['HOP_SO']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Số km đã đi</div><div class="line-value"><?=$arResult['PROPERTIES']['SO_KM']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Tình trạng sở hữu</div><div class="line-value"><?=$arResult['PROPERTIES']['TINH_TRANG_SO_HUU']['VALUE']?></div></div>
                                        <div class="line"><div class="line-label">Đăng ký lần đầu</div><div class="line-value"><?=$arResult['PROPERTIES']['DANG_KY_LAN_DAU']['VALUE']?></div></div>
                                    </div></div>
                            </div>
                        </div>
                        <div class="new-content">
                            <?if($arResult['PROPERTIES']['TINH_NANG_NOI_BAT']['~VALUE']['TEXT']!=""){ ?>
                                <div class="item small"><h4><span>Tính năng nổi bật</span></h4>
                                    <div class="car-detail-table content-icon icon-7">
                                        <?=$arResult['PROPERTIES']['TINH_NANG_NOI_BAT']['~VALUE']['TEXT']?>
                                    </div>
                                </div>
                            <?}?>
                            <?if($arResult['PROPERTIES']['TRANG_BI_LAP_THEM']['~VALUE']['TEXT']!=""){ ?>
                                <div class="item small"><h4><span>Trang bị lắp thêm</span></h4>
                                    <div class="car-detail-table content-icon icon-6">
                                        <?=$arResult['PROPERTIES']['TRANG_BI_LAP_THEM']['~VALUE']['TEXT']?>
                                    </div></div>
                            <?}?>
                        </div>



                    </div>

                    <div class="new-content">
                        <?if($arResult['CONFIG']['PROPERTIES']['TAO_DUNG_NIEM_TIN']['~VALUE']['TEXT'] != ""){?>
                            <div class="item"><h4><span>An Phát Khánh - Tạo dựng niềm tin</span></h4>
                                <div class="car-detail-table content-icon icon-1">
                                    <?=$arResult['CONFIG']['PROPERTIES']['TAO_DUNG_NIEM_TIN']['~VALUE']['TEXT']?>
                                </div>
                            </div>
                        <?}?>
                        <?if($arResult['CONFIG']['PROPERTIES']['CAM_KET_CHAT_LUONG']['~VALUE']['TEXT'] != ""){?>
                            <div class="item" id="tab-car-quanlity"><h4><span>Cam kết chất lượng</span></h4>
                                <div class="car-detail-table content-icon icon-2">
                                    <?=$arResult['CONFIG']['PROPERTIES']['CAM_KET_CHAT_LUONG']['~VALUE']['TEXT']?>
                                </div>
                            </div>
                        <?}?>
                    </div>

                </div>
                <?if($arResult['PROPERTIES']['GIA']['VALUE']>0){?>
                    <div>
                        <div class="preview-form" style="font-size: 14px;">
                            <h4 class="green-line"><i class="web-icon icon-big-circle"></i>Bảng tính lãi suất ngân hàng</h4>
                            <form action="" id="payment-form">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <ul class="pay-form">
                                            <li><label for="">Giá xe</label>
                                                <div class="field"><span class="field-control black-control"
                                                                         id="origin-price"
                                                                         data-origin-price="<?=$arResult['PROPERTIES']['GIA']['VALUE']?>">
                                                        <?=number_format($arResult['PROPERTIES']['GIA']['VALUE'])?></span></div></li>
                                            <li><label for="">Số tiền vay</label><div class="field">
                                                    <select class="anycar-dropdown" name="percent">
                                                        <option value="0.25">25%</option>
                                                        <option value="0.3">30%</option>
                                                        <option value="0.4">40%</option>
                                                        <option value="0.5">50%</option>
                                                        <option value="0.6">60%</option>
                                                        <option value="0.65">65%</option>
                                                        <option value="0.7">70%</option>
                                                        <option value="0.75">75%</option>
                                                        <option value="0.8" selected>80%</option>
                                                        <option value="0.85">85%</option>
                                                        <option value="0.9">90%</option>
                                                        <option value="0.95">95%</option>
                                                    </select></div></li><li><label for="">Tương đương</label><div class="field"><span class="field-control" id="name-result">0</span></div></li><li><label for="">Thời gian</label><div class="field"><select class="anycar-dropdown" name="time"><option value="12">1 năm</option><option value="24">2 năm</option><option value="36">3 năm</option><option value="48">4 năm</option><option value="60">5 năm</option><option value="72" selected>6 năm</option><option value="84">7 năm</option></select></div></li><li><label for="">Lãi suất</label><div class="field"><select name="interest_rate" id="" class="anycar-dropdown"><option value="7.5">7.5%</option><option value="8">8%</option><option value="9" selected>9%</option><option value="10">10%</option><option value="11">11%</option><option value="12">12%</option><option value="13">13%</option></select></div></li></ul>

                                    </div></div></form>

                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <ul class="list-description"><li>* Bảng này giúp bạn tính toán số tiền cần trả khi vay ngân hàng để mua xe trả góp.</li><li>* Cách thức tính theo dư nợ giảm dần hàng tháng.</li><li>* Giá trị của bảng là tương đối, sẽ được chi tiết cụ thể khi tiến hành thủ tục trả góp.</li></ul>

                                </div></div>

                            <div class="row">

                                <div class="col-md-6 col-md-offset-3">

                                </div>
                            </div>

                            <div class="display-table-result detail-overflow">
                                <div class="table-fluid table-responsive">

                                    <table class="table table-bordered" id="table-result">
                                        <thead style="background-color: #646464; color: #fff;"><tr><th><span class="hidden-xs">Số tháng</span><span class="visible-xs">Tháng</span></th><th><span class="hidden-xs">Dư nợ đầu kỳ</span><span class="visible-xs">Dư nợ</span></th><th><span class="hidden-xs">Trả gốc hàng tháng</span><span class="visible-xs">Gốc/Tháng</span></th><th><span class="hidden-xs">Trả lãi hàng tháng</span><span class="visible-xs">Lãi/Tháng</span></th><th><span class="hidden-xs">Gốc + lãi</span><span class="visible-xs">Gốc+Lãi</span></th></tr></thead><tbody></tbody>
                                    </table>

                                </div></div>

                        </div>
                    </div>

                <?}?>



            </div>
        </div>

        <div class="col-xs-12 col-sm-4 p0 pl20" id="col-left">
            <div class="gia-ban" id="div-3rd">
                <div class="font14 fontPro">Giá bán</div>
                <div class="price-red">
                    <?
                    if($arResult['PROPERTIES']['GIA']['VALUE'] > 0) {
                        echo number_format($arResult['PROPERTIES']['GIA']['VALUE'])." VND";
                    }else{
                        echo "Đã bán";
                    }
                    ?>
                </div>
                <span>Địa chỉ xem xe:</span>
                <h3><?= $arResult['PROPERTIES']['SHOW_ROOM']['VALUE'] != "" ? $arResult['PROPERTIES']['SHOW_ROOM']['VALUE'] : $arResult['CONFIG']['PROPERTIES']['SHOW_ROOM']['VALUE'];  ?></h3>
                <p><?= $arResult['PROPERTIES']['DIA_CHI']['VALUE'] != "" ? $arResult['PROPERTIES']['DIA_CHI']['VALUE'] : $arResult['CONFIG']['PROPERTIES']['DIA_CHI']['VALUE'];  ?></p>

            </div>

            <form id="frmContact" action="" method="POST">
                <div class="lien-he" id="div-5th">
                    <hr class="hidden-xs" style="margin-bottom: 5px;margin-top: 0px;">
                    <div class="font14 fontPro">Hotline</div>
                    <div class="price-red">
                        <a href="tel:<?= $arResult['PROPERTIES']['HOT_LINE']['VALUE'] != "" ? $arResult['PROPERTIES']['HOT_LINE']['VALUE'] : $arResult['CONFIG']['PROPERTIES']['HOT_LINE']['VALUE'];  ?>" class="price-red"><?= $arResult['PROPERTIES']['HOT_LINE']['VALUE'] != "" ? $arResult['PROPERTIES']['HOT_LINE']['VALUE'] : $arResult['CONFIG']['PROPERTIES']['HOT_LINE']['VALUE'];  ?></a></div>
                    <div class="txt-44 font16 bold">Liên hệ với chúng tôi</div>
                    <div class="icon-input">
                        <input class="form-control" name="name" placeholder="Họ và tên">
                        <i class="icon fa fa-user"></i></div>
                    <div class="icon-input">
                        <input class="form-control" name="email" placeholder="Email">
                        <i class="icon fa fa-envelope-o"></i></div>
                    <div class="icon-input"><input class="form-control" name="phone"  placeholder="Điện thoại liên hệ">
                        <i class="icon fa fa-phone"></i></div><div class="icon-input">
                        <textarea name="message" style="height: 110px" class="form-control" placeholder="Tin nhắn"></textarea>
                        <i class="icon fa fa-comment-o"></i></div>
                    <input type="hidden" value="<?=$arResult["ID"]?>" name="productid">
                    <div class="row row5 mt10"><div class="col-xs-12 col-sm-12 col-md-6">
                            <?
                            global $TYPE_CONTACT;
                            ?>
                            <a class="btn btn-red-45 w100p" onclick="contactCar(<?=$TYPE_CONTACT['call']?>)" href="javascript:void(0)">GỌI NGAY CHO TÔI</a></div>
                        <div class="col-xs-12 col-sm-12 col-md-6 mt15mb">
                            <a class="btn btn-blue-45 w100p" onclick="contactCar(<?=$TYPE_CONTACT['email']?>)" href="javascript:void(0)">EMAIL CHI TIẾT CHO TÔI</a></div></div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>


</style>

<div class="modal fade" id="box_error" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Lỗi xảy ra khi gửi</h4>
            </div>
            <div class="modal-body">
                <span class="text-danger" style="font-size: 14px">Kiểm tra lại thông tin nhập đầy đủ!</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="box_success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Gửi thành công</h4>
            </div>
            <div class="modal-body">
                <span style="font-size: 14px" class="text-success">An Phát Khánh đã nhận được thông tin đặt mua xe <b><?=$arResult['NAME']?></b> <br>
                Chúng tôi sẽ liên hệ lại quý khách trong thời gian sớm nhất!
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script>

    Number.prototype.formatNumber = function (a, b, c) {
        var d = this,
            a = isNaN(a = Math.abs(a)) ? 2 : a,
            b = void 0 == b ? "." : b,
            c = void 0 == c ? "," : c,
            e = d < 0 ? "-" : "",
            f = parseInt(d = Math.abs(+d || 0).toFixed(a)) + "",
            g = (g = f.length) > 3 ? g % 3 : 0;
        return e + (g ? f.substr(0, g) + c : "") + f.substr(g).replace(/(\d{3})(?=\d)/g, "$1" + c) + (a ? b + Math.abs(d - f).toFixed(a).slice(2) : "")
    };

    !function ($) {
        $.fn.anycarDropDown = function (b) {
            var c = $("body"),
                d = $.extend({}, b);
            this.each(function () {
                var b, e = $(this),
                    f = $("option:selected", e).text() || "";
                if (!e.hasClass("rendered")) {
                    e.wrapAll('<div class="anc-dr-wrap"/>'), e.addClass("rendered");
                    var g = "<ul>";
                    $("option", e).each(function () {
                        var b = $(this).is(":selected") ? ' class="dp-selected"' : "";
                        g += '<li data-value="' + $(this).attr("value") + '"' + b + ">" + $(this).text() + "</li>"
                    }), g += "</ul>", e.after(g).after('<span class="field-control">' + f + "</span>"), b = e.closest(".anc-dr-wrap")
                }
                var h = $(".field-control", b);
                b.click(function () {
                    b.hasClass("on") ? b.removeClass("on") : b.addClass("on")
                }), $("li", b).click(function () {
                    $('.dp-selected', b).removeClass('dp-selected');
                    $(this).addClass('dp-selected');
                    e.val($(this).data("value")), h.text($(this).text()), "function" == typeof d.onChanged && d.onChanged(e.attr("name"), $(this).data("value"))
                }), c.mouseup(function (a) {
                    !b.is(a.target) && 0 === b.has(a.target).length && b.hasClass("on") && b.removeClass("on")
                })
            });
        }
    }(jQuery);


    function contactCar(type){
        $.ajax({
            type: "POST",
            url: "/ajax/sendContact.php?type="+type,
            data: $("#frmContact").serialize(),
            dataType: 'json',
            cache:false,
            async:false,
            success: function(data){
                if(data.success) {

                    $('#box_success').modal('show');
                    $("#frmContact")[0].reset();
                }else{
                    $('#box_error').modal('show');
                }
            },
            error: function(){}
        });

    }

    $(function() {
        var f = $(".slider-show"),
            d = $(".slider-control"),
            g = false;
        f.owlCarousel({
            items: 1,
            dots: false,
            margin: 0,
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            nav: true,
            navText: ["", ""],
            responsive: {
                0: {
                    autoplay: true
                },
                480: {
                    autoplay: false
                }
            }
        });
        d.owlCarousel({
            items: 5,
            dots: false,
            margin: 0,
            center: false,
            nav: true,
            navText: ["", ""]
        });
        d.on("changed.owl.carousel", function(l) {
            f.trigger("to.owl.carousel", [l.item.index, 300]);
            $(".owl-item", d).removeClass("on");
            $(".owl-item", d).eq(l.item.index).addClass("on");
            g = true
        }).on("click", "a", function() {
            var l = $(this).data("index");
            f.trigger("to.owl.carousel", [l, 300]);
            $(".owl-item", d).removeClass("on");
            $(".owl-item", d).eq(l).addClass("on")
        });
        f.on("changed.owl.carousel", function(l) {
            d.trigger("to.owl.carousel", [l.item.index, 300])
        });


        var k = 0,
            e;
        var i = {
            getRound: function(l) {
                return (l / 1000).toFixed(3) * 1000
            },
            init: function(l, m) {
                return parseInt(this.getRound(l * m))
            },
            jsonFormData: function(m) {
                var l = {};
                $.each(m, function(o, n) {
                    l[n.name] = n.value
                });
                return l
            },
            numPad: function(m, l) {
                return Array((l || 2) - String(m).length + 1).join("0") + m
            },
            formatDate: function(l) {
                return this.numPad(l.getDate()) + "-" + this.numPad((l.getMonth() + 1)) + "-" + l.getFullYear()
            },
            renderRow: function(n) {
                var m = "<tr>";
                var l = true;
                $.each(n, function(o, p) {
                    m += '<td class="' + (l ? "text-center" : "") + '">' + p + "</td>";
                    l = false
                });
                m += "</tr>";
                return m
            },
            resetTable: function(l) {
                $("tbody", l).html("")
            },
            appendRow: function(l, m) {
                $("tbody", l).append(this.renderRow(m))
            },

            getInstallmentTable: function() {
                var w = $(".display-table-result");
                if (h > 0) {
                    var s = i.jsonFormData($("#payment-form").serializeArray());
                    var u = new Date();
                    u.setHours(0, 0, 0, 0);
                    var r = parseFloat(s.interest_rate),
                        n = r / 12;
                    i.resetTable(j);
                    var m = h * s.percent;
                    var v = {
                        index: 0,
                        origin: i.getRound(m).formatNumber(0, ",", "."),
                        origin_left: 0,
                        interest: 0,
                        total: 0
                    };
                    i.appendRow(j, v);
                    var p = m,
                        l = m / s.time,
                        t = {
                            origin_left: 0,
                            interest: 0,
                            total: 0
                        };
                    for (var q = 1; q < parseInt(s.time) + 1; q++) {
                        var o = Math.round(p * n / 100);
                        p -= l;
                        u.setMonth(u.getMonth() + 1);
                        u.setDate(1);
                        t = {
                            origin_left: t.origin_left + l,
                            interest: t.interest + o,
                            total: t.total + l + o
                        };
                        i.appendRow(j, {
                            index: q,
                            origin: i.getRound(p).formatNumber(0, ",", "."),
                            origin_left: i.getRound(l).formatNumber(0, ",", "."),
                            interest: i.getRound(o).formatNumber(0, ",", "."),
                            total: i.getRound(l + o).formatNumber(0, ",", ".")
                        })
                    }
                    i.appendRow(j, {
                        index: "",
                        origin: "",
                        origin_left: i.getRound(t.origin_left).formatNumber(0, ",", "."),
                        interest: i.getRound(t.interest).formatNumber(0, ",", "."),
                        total: i.getRound(t.total).formatNumber(0, ",", ".")
                    });
                    if (!$(this).hasClass("show")) {
                        $(this).addClass("show");
                        w.show()
                    }
                    w.readmore({
                        speed: 200,
                        collapsedHeight: 600,
                        moreLink: '<div class="wrap-more on"><a href="#" class="lnk lnk-more">Xem thêm</a></div>',
                        lessLink: '<div class="wrap-more"><a href="#" class="lnk lnk-more">Thu gọn</a></div>',
                        afterToggle: function(y, z, x) {
                            if (!x) {
                                $("html, body").animate({
                                    scrollTop: z.offset().top - 100
                                }, 400)
                            }
                        }
                    })
                }
            },
            alert: function(m, l) {
                var n = l || $(".form-dropdown");
                if ($(".alert.alert-red", n).length == 0) {
                    n.append('<div class="alert alert-red text-center">' + m + "</div>")
                }
                return $(".alert.alert-red", n)
            }
        };
        var h = parseInt($("#origin-price").data("origin-price")),
            a = $("#name-result"),
            j = $("#table-result");
        a.text(i.init(h, $('select[name="percent"]').val()).formatNumber(0, ",", "."));
        $(".anycar-dropdown").anycarDropDown({
            onChanged: function(l, m) {
                if (l == "percent" || l == "interest_rate" || l == "time") {
                    i.getInstallmentTable();
                    if (l == "percent") {
                        a.text(i.init(h, m).formatNumber(0, ",", "."))
                    }
                } else {
                    i.requestCost();
                    k = m;
                    if (e !== undefined && e.length > 0) {
                        e.remove()
                    }
                }
            }
        });

        i.getInstallmentTable();

    });
    jQuery(function($) {
        function fixDiv() {
            var $cache = $('#div-5th');
            if ($(window).width() >= 1024) {

                if ($(window).scrollTop() > 400)
                    $cache.css({
                        'position': 'fixed',
                        'top': '70px',
                        'width': jQuery("#col-left").width()
                    });
                else
                    $cache.css({
                        'position': 'relative',
                        'top': 'auto'
                    });
            }else{
                $cache.css({
                    'position': 'relative',
                    'top': 'auto',
                    'width': jQuery("#col-left").width()
                });
            }
        }
        $(window).scroll(fixDiv);
        fixDiv();
    });

</script>
