<?
require($_SERVER["DOCUMENT_ROOT"] . "/webmin/header.php");
$APPLICATION->SetTitle("");
?><?
require($_SERVER["DOCUMENT_ROOT"] . "/webmin/header.php");
$APPLICATION->SetTitle("Furniture Company");
?>
    <script>
        function initMap() {
            var inputGo = document.getElementById('searchInputGo');
            var inputTo = document.getElementById('searchInputTo');
            var depart_pick_pos = document.getElementById('depart_pick_pos');
            var depart_drop_pos = document.getElementById('depart_drop_pos');


            var autocompleteGo = new google.maps.places.Autocomplete(inputGo);
            var autocompleteTo = new google.maps.places.Autocomplete(inputTo);

            google.maps.event.addListener(autocompleteGo, 'place_changed', function () {
                var place = autocompleteGo.getPlace();

                depart_pick_pos.value = place.geometry.location.lat() + "," + place.geometry.location.lng();

                $('#book_type').val('tinh');

                for (var i = 0; i < place.types.length; i++) {
                    if (place.types[i] == 'airport') {
                        $('#book_type').val('airport');
                    }
                }

                if (place.name == "Sân Bay Nội Bài") {
                    $('#book_type').val('airport');
                }
            });
            google.maps.event.addListener(autocompleteTo, 'place_changed', function () {
                var place = autocompleteTo.getPlace();
                depart_drop_pos.value = place.geometry.location.lat() + "," + place.geometry.location.lng();

            });
        }

        google.maps.event.addDomListener(window, 'load', initMap);
    </script>

    <div class="content-wrapper">
        <section>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div style="background: url(&quot;http://apka.vn/webmin/templates/main/images/bapka.jpg&quot;);"
                         class="item active">
                        <div class="carousel-caption">
                            <h2>Thoải m&aacute;i như xe nh&agrave;. Giá rẻ như xe khách</h2>
                        </div>
                    </div>
                </div>
                <form id="frmDatXe" action="/dat-xe-2/" method="GET">
                    <div class="datxe">
                        <ul class="nav-tabs nav">
                            <li class="active"><a href="/"> <i class="fa fa-plane fa-lg"></i> <span>S&acirc;n bay</span>
                                </a></li>

                            <li><a href="/duong-dai-gia-re/"> <i class="fa fa-road fa-lg"></i> <span>Đường dài</span>
                                </a></li>

                            <li><a ids="5" href="/xe-gia-re-noi-thanh/"> <i class="fa fa-building fa-lg"></i> <span>Trong thành phố</span>
                                </a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="pane1" class="tab-pane active">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="row"><input type="hidden" id="depart_pick_pos"
                                                                name="depart_pick_pos"/> <input type="hidden"
                                                                                                id="depart_drop_pos"
                                                                                                name="depart_drop_pos"/>
                                            <input type="hidden" id="book_type" name="book_type"/>
                                            <div class="col-md-6 col pick-group padding_top">
                                                <div class="input-group append_pick_address_here"><span
                                                            class="input-group-addon"><i class="fa fa-map-marker mpick"
                                                                                         aria-hidden="true"></i> </span>
                                                    <select name="data[pick_address_raw]" id="data_pick_address_raw"
                                                            class="MyCombobox select2 form-control"
                                                            style="display: none;"
                                                            placeholder="Điểm đ&oacute;n, sân bay hoặc khách sạn"></select>
                                                    <span class="custom-combobox"><span role="status"
                                                                                        aria-live="polite"
                                                                                        class="ui-helper-hidden-accessible"></span><input
                                                                required="" title=""
                                                                class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input"
                                                                autocomplete="off" data-original-title=""
                                                                id="searchInputGo" name="depart_pick"
                                                                placeholder="Điểm đón, sân bay hoặc khách sạn"/><span
                                                                id="coner_right_mpick" class="coner-right-container"
                                                                style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i
                                                                    class="ui-corner-right fa fa-location-arrow my-location"></i><span
                                                                    class="ui-corner-right reset_selected hide">&times;</span></span></span>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col exchange-col padding_top hide"><span
                                                        class="exchange-icon" data-toggle="tooltip"
                                                        data-placement="bottom"
                                                        title="Chuyển đổi địa chỉ đón và trả"></span></div>

                                            <div class="col-md-6 col drop-group padding_top homepage-input-search-container">
                                                <div class="input-group append_drop_address_here"><span
                                                            class="input-group-addon"><i class="fa fa-map-marker mdrop"
                                                                                         aria-hidden="true"></i></span>
                                                    <select name="" id="data_drop_address_raw"
                                                            class="MyCombobox select2 form-control"
                                                            style="display: none;"
                                                            placeholder="Điểm đến, sân bay hoặc khách sạn"></select><span
                                                            class="custom-combobox"><span role="status"
                                                                                          aria-live="polite"
                                                                                          class="ui-helper-hidden-accessible"></span><input
                                                                required="" title=""
                                                                class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input"
                                                                autocomplete="off" data-original-title=""
                                                                id="searchInputTo" name="depart_drop"
                                                                placeholder="Điểm đến, sân bay hoặc khách sạn"/><span
                                                                id="coner_right_mdrop" class="coner-right-container"
                                                                style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i
                                                                    class="ui-corner-right fa fa-location-arrow my-location"></i><span
                                                                    class="ui-corner-right reset_selected hide">×</span></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-7 padding_top ">
                                                <div class="input-group">
                                                    <span style="display: block;"
                                                          class="input-group-addon">
                                                        <i class="fa fa-calendar"></i></span>
                                                    <input style="outline: none; position: static;" name="depart_time"
                                                           id="data_depart_time" class="form-control  form_datetime"
                                                           type="text" placeholder="Thời gian đón"
                                                           autocomplete="off" required
                                                    /></div>
                                            </div>
                                            <div class="col-md-5 padding_top" style="overflow: hidden;">
                                                <button type="submit" class="btn btn_blue" id="show_cost">XEM
                                                    GI&Aacute;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 0px;">
                                    <div class="col-md-6">
                                        <p>
                                            <a class="" data-toggle="collapse" href="#collapseExample"
                                               role="button" aria-expanded="false" aria-controls="collapseExample">
                                                + Nhập Mã Khuyến Mại
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <input style="outline: none; position: static;" name="ma_khuyen_mai"
                                                       class="form-control"
                                                       type="text"
                                                       placeholder="Nhập mã khuyến mại ( Số điện thoại đại lí hoặc Mã Vourcher )"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <div class="white_bg">
            <div class="container box_sm" style="text-align: center;">
                <header class="section-header ">
                    <div class="heading-wrap">
                        <h2 class="heading"><span> GIÁ XE</span></h2>
                    </div>
                </header>
                <div class="box-body" style="padding-top: 30px;">
                    <div id="option_product">
                        <ul class="nav nav-tabs" style="display: block;
                                    background-repeat: repeat-x;
                                    background-position: left top;
                                    border-style: solid;
                                    border-width: 0 0 1px;
                                    margin: 0;
                                    padding: 0;
                                    background: #f8f8f8;">

                            <li class="active">
                                <a href="#spec" data-toggle="tab" style="padding: 15px 10px !important; ">
                                    Xe 5 chỗ </a>
                            </li>
                            <li>
                                <a href="#images" data-toggle="tab" style="padding: 15px 10px !important; ">
                                    Xe 7 chỗ </a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="spec">
                                <div class="specs">
                                    <h4> Xe 4 chỗ </h4>
                                    <div class="widget stacked widget-table action-table">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                <tr>
                                                    <th>Khu vực</th>
                                                    <th>Từ Hà Nội đến Nội Bài</th>
                                                    <th>Từ Nội Bài đến Hà Nội</th>
                                                    <th>Hai chiều (Khứ hồi)</th>
                                                </tr>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Q.TÂY HỒ</td>
                                                    <td> 150 - 180K</td>
                                                    <td> 250 - 250K</td>
                                                    <td> 350 - 430K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.CẦU GIẤY</td>
                                                    <td> 150 - 190K</td>
                                                    <td> 250 - 250K</td>
                                                    <td> 450 - 440K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.HOÀN KIẾM</td>
                                                    <td>150 - 180K</td>
                                                    <td>250 - 250K</td>
                                                    <td>350 - 430K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.BẮC TỪ LIÊM</td>
                                                    <td>150 - 200K</td>
                                                    <td> 250 - 250K</td>
                                                    <td> 450 - 450K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.BA ĐÌNH</td>
                                                    <td>150 - 180K</td>
                                                    <td> 250 - 250K</td>
                                                    <td> 390 - 430K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.NAM TỪ LIÊM</td>
                                                    <td>150 - 220K</td>
                                                    <td>250 - 280K</td>
                                                    <td> 430 - 500K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.ĐỐNG ĐA</td>
                                                    <td>150 - 220K</td>
                                                    <td>250 - 280K</td>
                                                    <td> 430 - 500K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.THANH XUÂN</td>
                                                    <td>150 - 230K</td>
                                                    <td>250 - 280K</td>
                                                    <td> 440 - 530K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.LONG BIÊ</td>
                                                    <td>150 - 220K</td>
                                                    <td>250 - 280K</td>
                                                    <td> 430 - 500K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.HAI BÀ TRƯNG</td>
                                                    <td>150 - 220K</td>
                                                    <td>250 - 280K</td>
                                                    <td> 440 - 500K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.HOÀNG MAI</td>
                                                    <td> 250 - 250K</td>
                                                    <td> 250 - 300K</td>
                                                    <td> 470 - 550K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.THANH TRÌ</td>
                                                    <td> 250 - 250K</td>
                                                    <td>250 - 300K</td>
                                                    <td> 470 - 550K</td>
                                                </tr>
                                                <tr>
                                                    <td>Q.HÀ ĐÔNG</td>
                                                    <td> 250 - 250K</td>
                                                    <td>250 - 300K</td>
                                                    <td> 460 - 550K</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- /widget -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="images">
                                <h4> Xe 7 chỗ </h4>
                                <div class="widget stacked widget-table action-table">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                            <tr>
                                                <th>Khu vực</th>
                                                <th>Từ Hà Nội đến Nội Bài</th>
                                                <th>Từ Nội Bài đến Hà Nội</th>
                                                <th>Hai chiều (Khứ hồi)</th>
                                            </tr>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Q.TÂY HỒ</td>
                                                <td>250 - 250K</td>
                                                <td> 250 - 290K</td>
                                                <td> 550 - 540K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.CẦU GIẤY</td>
                                                <td>250 - 250K</td>
                                                <td>250 - 290K</td>
                                                <td> 550 - 540K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.HOÀN KIẾM</td>
                                                <td>250 - 250K</td>
                                                <td>250 - 290K</td>
                                                <td> 550 - 540K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.BẮC TỪ LIÊM</td>
                                                <td>250 - 250K</td>
                                                <td>250 - 290K</td>
                                                <td> 550 - 540K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.BA ĐÌNH</td>
                                                <td>250 - 250K</td>
                                                <td> 250 - 290K</td>
                                                <td> 500 - 540K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.NAM TỪ LIÊM</td>
                                                <td>250 - 270K</td>
                                                <td>250 - 320K</td>
                                                <td> 520 - 590K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.ĐỐNG ĐA</td>
                                                <td>250 - 260K</td>
                                                <td>250 - 320K</td>
                                                <td> 520 - 580K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.THANH XUÂN</td>
                                                <td>250 - 270K</td>
                                                <td>250 - 320K</td>
                                                <td> 520 - 590K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.LONG BIÊ</td>
                                                <td>250 - 270K</td>
                                                <td>250 - 320K</td>
                                                <td> 520 - 590K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.HAI BÀ TRƯNG</td>
                                                <td>250 - 270K</td>
                                                <td>250 - 320K</td>
                                                <td> 520 - 590K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.HOÀNG MAI</td>
                                                <td> 250 - 290K</td>
                                                <td>250 - 340K</td>
                                                <td> 530 - 630K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.THANH TRÌ</td>
                                                <td> 250 - 290K</td>
                                                <td>250 - 340K</td>
                                                <td> 540 - 630K</td>
                                            </tr>
                                            <tr>
                                                <td>Q.HÀ ĐÔNG</td>
                                                <td>250 - 290K</td>
                                                <td>250 - 340K</td>
                                                <td> 540 - 630K</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- /widget -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.form group -->

                </div>
                <!-- /.box-body -->
            </div>

            <?
            $APPLICATION->IncludeComponent(
                "webcomp:news.list",
                "nang.luc",
                Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => 'vn',
                    "IBLOCK_ID" => 16,
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(),
                    "PROPERTY_CODE" => array('ICON_TEXT'),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => 'H:i d/m/Y',
                    "SET_TITLE" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => '',
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => 'vv_list',
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "AJAX_OPTION_HISTORY" => "N",
                ),
                false
            );
            ?>

            <?
            $APPLICATION->IncludeComponent(
                "webcomp:news.list",
                "qua.tang",
                Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => 'vn',
                    "IBLOCK_ID" => 17,
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(),
                    "PROPERTY_CODE" => array('ICON_TEXT'),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => 'H:i d/m/Y',
                    "SET_TITLE" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => '',
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => 'vv_list',
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "AJAX_OPTION_HISTORY" => "N",
                ),
                false
            );
            ?>

            <?
            $arResult = $APPLICATION->IncludeComponent(
                "webcomp:news.detail",
                "why.us",
                Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "USE_SHARE" => "N",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => 'vn',
                    "IBLOCK_ID" => 18,
                    "ELEMENT_ID" => "737",
                    "ELEMENT_CODE" => "",
                    "CHECK_DATES" => "Y",
                    "FIELD_CODE" => array("show_counter"),
                    "PROPERTY_CODE" => array("VIDEO_YOUTUBE", "DOWNLOAD"),
                    "IBLOCK_URL" => "",
                    "META_KEYWORDS" => "-",
                    "META_DESCRIPTION" => "-",
                    "BROWSER_TITLE" => "-",
                    "SET_TITLE" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "ADD_NAME_CHAIN" => "N",
                    "ACTIVE_DATE_FORMAT" => 'H:i d/m/Y',
                    "USE_PERMISSIONS" => "N",
                    "CACHE_TYPE" => "N",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Page",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_SHOW_ALL" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "AJAX_OPTION_HISTORY" => "N"
                ),
                false
            );
            ?>
            <?
            $APPLICATION->IncludeComponent(
                "webcomp:news.list",
                "feedback.driver",
                Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => 'vn',
                    "IBLOCK_ID" => 19,
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(),
                    "PROPERTY_CODE" => array(''),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => 'H:i d/m/Y',
                    "SET_TITLE" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => '',
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => '',
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "AJAX_OPTION_HISTORY" => "N",
                ),
                false
            );
            ?>
            <?
            $APPLICATION->IncludeComponent(
                "webcomp:news.list",
                "faq",
                Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => 'vn',
                    "IBLOCK_ID" => '20',
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(),
                    "PROPERTY_CODE" => array(''),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => 'H:i d/m/Y',
                    "SET_TITLE" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => '',
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => '',
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "AJAX_OPTION_HISTORY" => "N",
                ),
                false
            );
            ?>


            <div class="container box_sm">

                <!--                --><? //
                //                $APPLICATION->IncludeFile("/inc/bang-gia.php",
                //                    Array(),
                //                    Array("MODE" => "html")
                //                );
                //                ?>

                <div class="col-md-4 col-sm-4 benefit">
                    <div class="row" style="margin-right: -70px;">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <p class="box_sm"><img title="Đảm bảo Giá tốt nhất" alt="Đảm bảo Giá tốt nhất"
                                                   src="<?= SITE_TEMPLATE_PATH ?>/images/86c2e55bd0b771bb97504ca73b052439.png"
                                                   width="100px"/></p>
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4 style="color: rgb(238, 94, 23);">Đảm bảo Giá tốt nhất</h4>

                            <p class="chunk_name">So sánh h&atilde;ng để chọn giá tốt nhất</p>

                            <p>B&ugrave; giá nếu t&igrave;m được giá tốt hơn</p>

                            <p>Đặt sớm tiết kiệm th&ecirc;m 30%</p>

                            <p class="chunk_name"></p>

                            <p></p>

                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 benefit">
                    <div class="row" style="margin-right: -70px;">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <p class="box_sm"><img title="Cam kết chất lượng" alt="Cam kết chất lượng"
                                                   src="<?= SITE_TEMPLATE_PATH ?>/images/9d8791331ab81f0247b339f994df33d6.png"
                                                   width="100px"/></p>
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4 style="color: rgb(238, 94, 23);">Cam kết chất lượng</h4>

                            <p class="chunk_name">Lu&ocirc;n có xe nếu đặt trước</p>

                            <p>Bồi thường nếu đón muộn</p>

                            <p>Hoàn tiền nếu không hài l&ograve;ng</p>

                            <p class="chunk_name"></p>

                            <p></p>

                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 benefit">
                    <div class="row" style="margin-right: -70px;">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <p class="box_sm"><img title="Tiện &iacute;ch đặc biệt" alt="Tiện ích đặc biệt"
                                                   src="<?= SITE_TEMPLATE_PATH ?>/images/4c4c38742106ce88b20e483801cf53cd.png"
                                                   width="100px"/></p>
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4 style="color: rgb(238, 94, 23);">Tiện ích đặc biệt</h4>

                            <p class="chunk_name">Dịch vụ đi gh&eacute;p giá siêu rẻ</p>

                            <p>Thể hiện phong cách sống xanh</p>

                            <p>Đi lại thân thiện với môi trường</p>

                            <p class="chunk_name"></p>

                            <p></p>

                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    <div id="noti-container"-->
    <!--         style="bottom: 0px;left: 10px;position: fixed;width: 310px;height: auto;/* margin: 0px; *//* padding: 0px; *//* z-index: 1000; *//* display: block; */">-->
    <!--        <div style="overflow: hidden; margin: 4px 0px; border-radius: 2px; border: 1px solid rgb(222, 222, 222); box-shadow: rgba(0, 0, 0, 0.0980392) 0px 2px 4px; background-color: rgb(255, 255, 255); color: rgb(68, 68, 68); width: 310px; cursor: pointer; height: 95px;">-->
    <!--            <button type="button" class="close" style="position: relative; right: 10px; top: 4px; z-index: 1500;"><span-->
    <!--                        aria-hidden="true">×</span></button>-->
    <!--            <div class="owl-carousel owl-loaded">-->
    <!--                <div class="owl-stage-outer">-->
    <!--                    <div class="owl-stage"-->
    <!--                         style="width: 1540px; transform: translate3d(-1232px, 0px, 0px); transition: 0.5s;">-->
    <!--                        <div class="owl-item" style="width: 308px;">-->
    <!--                            <div style="font-size: 13px; line-height: 16px; text-align: left; padding: 10px; width: auto; position: relative;">-->
    <!--                                <p style="border-bottom: solid 1px #0288d1; padding-bottom: 5px; ">-->
    <!--                                    <span style="color:#0288d1">Khách vừa đặt tại </span><b>Hà Nội</b>-->
    <!--                                </p>-->
    <!--                                <table style="color: #0288d1; font-family: Roboto; font-size: 12px">-->
    <!--                                    <tbody>-->
    <!--                                    <tr>-->
    <!--                                        <td style="vertical-align: top">-->
    <!--                                            <img src="https://taxiairport.vn/uploads/partner_vehicle/3107e0895094be94fd4a18fa35307c5d.png"-->
    <!--                                                 style="vertical-align: top; margin: 5px; max-width: 57px"></td>-->
    <!--                                        <td>-->
    <!--                                            Nội Bài - Hà Nội | Đi chung<br>-->
    <!--                                            Tên: Lê Châu Phát<br>-->
    <!--                                            ĐT: 016xxx98668 - Giá: <span style="color:#555"><b>180K</b></span></td>-->
    <!--                                    </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="owl-item" style="width: 308px;">-->
    <!--                            <div style="font-size: 13px; line-height: 16px; text-align: left; padding: 10px; width: auto; position: relative;">-->
    <!--                                <p style="border-bottom: solid 1px #0288d1; padding-bottom: 5px; ">-->
    <!--                                    <span style="color:#0288d1">Just booked in</span> <b>Đồng Nai</b>-->
    <!--                                </p>-->
    <!--                                <table style="color: #0288d1; font-family: Roboto; font-size: 12px">-->
    <!--                                    <tbody>-->
    <!--                                    <tr>-->
    <!--                                        <td style="vertical-align: top">-->
    <!--                                            <img src="https://taxiairport.vn/uploads/partner_vehicle/f2f9dfd1b6776c1d4562d47f2da4c8e9.png"-->
    <!--                                                 style="vertical-align: top; margin: 5px; max-width: 57px"></td>-->
    <!--                                        <td>-->
    <!--                                            Nam Cát Tiên, Đồng Nai - Hồ Chí Minh | ĐI RIÊNG<br>-->
    <!--                                            Name: Daniel Tan Dan Yi<br>-->
    <!--                                            Tel: +6xxx0525534 - Cost: <span style="color:#555"><b>2.400K</b></span>-->
    <!--                                        </td>-->
    <!--                                    </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="owl-item" style="width: 308px;">-->
    <!--                            <div style="font-size: 13px; line-height: 16px; text-align: left; padding: 10px; width: auto; position: relative;">-->
    <!--                                <p style="border-bottom: solid 1px #0288d1; padding-bottom: 5px; ">-->
    <!--                                    <span style="color:#0288d1">Khách vừa đặt tại </span><b>Hà Nội</b>-->
    <!--                                </p>-->
    <!--                                <table style="color: #0288d1; font-family: Roboto; font-size: 12px">-->
    <!--                                    <tbody>-->
    <!--                                    <tr>-->
    <!--                                        <td style="vertical-align: top">-->
    <!--                                            <img src="https://taxiairport.vn/uploads/partner_vehicle/6f972796662af026a2f8a7d3f84b8159.png"-->
    <!--                                                 style="vertical-align: top; margin: 5px; max-width: 57px"></td>-->
    <!--                                        <td>-->
    <!--                                            Hà Nội - Nội bài | ĐI RIÊNG<br>-->
    <!--                                            Tên: Nguyễn Quý Tuấn Trung <br>-->
    <!--                                            ĐT: 096xxx4668 - Giá: <span style="color:#555"><b>180K</b></span></td>-->
    <!--                                    </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="owl-item" style="width: 308px;">-->
    <!--                            <div style="font-size: 13px; line-height: 16px; text-align: left; padding: 10px; width: auto; position: relative;">-->
    <!--                                <p style="border-bottom: solid 1px #0288d1; padding-bottom: 5px; ">-->
    <!--                                    <span style="color:#0288d1">Khách vừa đặt tại </span><b>Hà Nội</b>-->
    <!--                                </p>-->
    <!--                                <table style="color: #0288d1; font-family: Roboto; font-size: 12px">-->
    <!--                                    <tbody>-->
    <!--                                    <tr>-->
    <!--                                        <td style="vertical-align: top">-->
    <!--                                            <img src="https://taxiairport.vn/uploads/partner_vehicle/34431308d3390f1a01e2662e5c5d9484.png"-->
    <!--                                                 style="vertical-align: top; margin: 5px; max-width: 57px"></td>-->
    <!--                                        <td>-->
    <!--                                            Hà Nội - Nội bài | ĐI RIÊNG<br>-->
    <!--                                            Tên: phó đức hiệp<br>-->
    <!--                                            ĐT: 090xxx0748 - Giá: <span style="color:#555"><b>180K</b></span></td>-->
    <!--                                    </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="owl-item active" style="width: 308px;">-->
    <!--                            <div style="font-size: 13px; line-height: 16px; text-align: left; padding: 10px; width: auto; position: relative;">-->
    <!--                                <p style="border-bottom: solid 1px #0288d1; padding-bottom: 5px; ">-->
    <!--                                    <span style="color:#0288d1">Khách vừa đặt tại </span><b>Đà Nẵng</b>-->
    <!--                                </p>-->
    <!--                                <table style="color: #0288d1; font-family: Roboto; font-size: 12px">-->
    <!--                                    <tbody>-->
    <!--                                    <tr>-->
    <!--                                        <td style="vertical-align: top">-->
    <!--                                            <img src="https://taxiairport.vn/uploads/partner_vehicle/3107e0895094be94fd4a18fa35307c5d.png"-->
    <!--                                                 style="vertical-align: top; margin: 5px; max-width: 57px"></td>-->
    <!--                                        <td>-->
    <!--                                            Sân Bay - Trung Tâm TP | ĐI RIÊNG<br>-->
    <!--                                            Tên: PG Thùy Trang <br>-->
    <!--                                            ĐT: 097xxx7773 - Giá: <span style="color:#555"><b>130K</b></span></td>-->
    <!--                                    </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="owl-nav disabled">-->
    <!--                    <div class="owl-prev">prev</div>-->
    <!--                    <div class="owl-next">next</div>-->
    <!--                </div>-->
    <!--                <div class="owl-dots disabled"></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
<? require($_SERVER["DOCUMENT_ROOT"] . "/webmin/footer.php"); ?><? require($_SERVER["DOCUMENT_ROOT"] . "/webmin/footer.php"); ?>