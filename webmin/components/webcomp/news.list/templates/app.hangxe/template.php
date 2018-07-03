<div class="tab-pane active">
    <form id="result">
        <input type="hidden" name="Km" id="Km" value="">
        <input type="hidden" name="select" id="select" value="">
        <input type="hidden" id="tung" value="<?= $_REQUEST['book_type'] ?>" name="type_book">
        <input type="hidden" id="ma_khuyen_mai" value="<?= $_REQUEST['ma_khuyen_mai'] ?>" name="ma_khuyen_mai">



        <div class="showxe_box highlight_brand" partner_id="85" pm_id="4019" server_class="CalcPriceByVillage85"
             merged_cost="150000" priority="1" unmerged_cost="150000" unmerged_cost_format="150.000đ" hide="0"
             online_booking="1" use_range_time="0"
             style="border: solid 2px #4db90d;margin-bottom: 30px; margin-top: 50px">
            <div class="highlight_title_frame"
                 style="display: inline-block;background: #4db90d;color: #fff;padding: 0 10px; margin-top: -1px;margin-left: -10px;position: absolute;">
            <span class="highlight_title">
                <i class="fa fa-star"></i> Đề xuất sử dụng
            </span>
            </div>
            <div class="row">
                <div class="col-md-2 padding_top" style="margin-top: 10px; font-size: 12px">
                    <p class="h4 text-uppercase"> XE STANDARD  </p>
                    <p >Xe 5 chỗ có cốp   </p>
                    <p>( Vios, Attrage)</p>
                    <p class="rate" style="margin: 0 0 10px;">
                    <div class="rating-container theme-krajee-fa rating-md rating-animate rating-disabled"
                         style="display: block;">
                        <div class="rating-stars"
                             style="cursor: not-allowed; position: relative;vertical-align: middle;display: inline-block;overflow: hidden;white-space: nowrap;">
                            <span class="empty-stars" style="color: #aaa;"><span class="star"
                                                                                 style="display: inline-block;margin: 0 3px;text-align: center;">
                                    <i class="glyphicon glyphicon-star-empty"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star-empty"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star-empty"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star-empty"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star-empty"></i></span></span>
                            <span class="filled-stars"
                                  style="width: 95.7706%; position: absolute;left: 0;top: 0;margin-left: 4px;color: #0288d1;white-space: nowrap;overflow: hidden;-webkit-text-stroke: 1px #777;text-shadow: 1px 1px #999;">
                                <span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span></span>
                        </div>
                        <div class="caption"
                             style="margin-left: 5px;margin-right: 0; color: #999;display: inline-block;vertical-align: middle;font-size: 120%;margin-top: -0.6em;">
                            <span class="label label-default">4.9</span>
                        </div>
                    </div>
                    <p><a hidden href="/thong-tin-hang-taxi/xe-hop-dong" target="_blank">Thông tin hãng xe</a></p>
                </div>
                <div class="col-md-2 text-center img-col" style="margin-top: 29px;">
                    <img width="150" alt="4 Chỗ" title="4 Chỗ" src="<?=$arResult["ITEMS"][1]['PREVIEW_PICTURE']['SRC']?>">
                </div>
                <div class="col-md-3" style="margin-top: 14px;">
                    <p class="h6 partner_note hide"></p>
                    <p class="h6 partner_note"><i
                                class="fa fa-share-square-o"></i> <span style="font-weight:bold;color:red;">Giá đã bao gồm vé vào cửa sân bay. Phù hợp với vali lớn</span>
                    </p>
                    <p class="h6"><i class="fa fa-car"></i> <span
                                class="vehicle_name">Loại xe: <b><?= $arResult["ITEMS"][1]['NAME']; ?></b></span></p>
                    <p class="h6 luggage"><i class="glyphicon glyphicon-briefcase"></i> 1 Vali vừa + 1 Túi xách </p>
                    <p class="secure" style="color: #3f9952; font-size: "75%"><span class="help_icon secure" ></span> <span class="use_count"><?= rand(50,60);?></span> người
                        đang chọn xe này</p>
                    <p class="h6 vehicle_frame" style="font-family: inherit;font-weight: 500;line-height: 1.1;color: inherit;" hidden><label>
                            <span class="vehicle_unit" style="font-size: 12px;margin-left: 2px;margin-top: 10px;">Số khách</span>:
                            <span class="vehicle_count_text">1</span>
                            <i class="fa fa-caret-down" aria-hidden="true" style="display: inline-block;font-family: FontAwesome;font-style: normal;font-weight: normal;line-height: 1;-webkit-font-smoothing: antialiased;"></i>
                            <select class="chair_id" style="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select> </label></p>
                </div>
                <div class="col-md-5 price_button_column">
                    <div class="col-md-6 text-center price_column" style="margin-top: 20px; position: relative;min-height: 1px;padding-right: 10px;padding-left: 10px;">
                        <div class="gia" style="margin-top: 30px;margin-bottom: 30px;">
                            <p class="total_price h3 margin_bottom_0x" style="text-decoration: line-through;"> <span id="gia_dx_km350"></span></p>
                            <p class="total_price h3 margin_bottom_0x"> <span id="gia_dx350"></span></p>
                            <p class="price unmerge_cost hide">150.000đ</p>
                            <p class="h6 margin_bottom_0x price_type bold">
                                <?
                                $a = $arResult["ITEMS"][1]["PROPERTIES"]["GIA_XE_DI"]["VALUE"]/1000;
                                $a = number_format("$a", 3);
                                echo $a;
                                ?>đ
                                <i></i>tối đa 26Km<br>Từ
                                Km 27, giá
                                <i></i>
                                <?
                                $b = $arResult["ITEMS"][1]["PROPERTIES"]["GIAI_KM_DI"]["VALUE"]/1000;
                                $b = number_format($b,3);
                                echo $b
                                ?>
                                đ/1km</p>
                            <a hidden class="h6 margin_bottom_0x promotion_description"><span style="color:green;">đã giảm 30.000đ vì đặt trước 7 ngày</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 booking_button_column" style="margin-top: 31.5px; margin-bottom: 15px;">
                        <div class="gia text-right padding_top">
                            <div class="radio book">
                                <label class="radio_label" for="depart_book_select_85_1" style="width: 100%;">
                                    <input type="radio" class="hide" name="depart_book_select" id="depart_book_select_85_1">
                                    <div class="btn btn_blue book_xe" data-id="350">
                                        Đặt ngay <br> giá tốt hơn!
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="hightlight_tip" style="position: absolute;color: #909090;margin-top: 10px;margin-left: -10px;cursor: pointer;" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa fa-question-circle" style="font-size:16px" ></i> Tại sao kết quả này được đề xuất?
            </p>
        </div>
        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <br>
                        <div style="text-align:center;"><img src="https://dichungtaxi.com/images/icon-star.png"></div>
                        <br>
                        <h1 style="text-align:center">Tại sao kết quả này được đề xuất?</h1>
                        <br>
                        <p>Dựa vào các kết quả phản hồi của khách hàng chúng tôi đề xuất hãng xe có thể mang lại trải nghiệm thoải mái nhất cho quý khách</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                        <button  type="button" class="btn btn-primary hidden">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <br>

<!--        --><?// Cdebug::dump($arResult); ?>

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <input type="hidden" name="GIA_KM_DI[<?= $arItem['ID'] ?>]"
                   value="<?= $arItem['PROPERTIES']['GIAI_KM_DI']['VALUE'] ?>">
            <input type="hidden" name="GIA_KM_VE[<?= $arItem['ID'] ?>]"
                   value="<?= $arItem['PROPERTIES']['GIA_KM_VE']['VALUE'] ?>">
            <input type="hidden" name="GIA_XE_DI[<?= $arItem['ID'] ?>]"
                   value="<?= $arItem['PROPERTIES']['GIA_XE_DI']['VALUE'] ?>">
            <input type="hidden" name="GIA_XE_VE[<?= $arItem['ID'] ?>]"
                   value="<?= $arItem['PROPERTIES']['GIA_XE_VE']['VALUE'] ?>">

            <input type="hidden" name="GIA_TRON_GOI_DI[<?= $arItem['ID'] ?>]"
                   value="<?= $arItem['PROPERTIES']['GIA_TRON_GOI_DI']['VALUE'] ?>">
            <input type="hidden" name="GIA_TRON_GOI_VE[<?= $arItem['ID'] ?>]"
                   value="<?= $arItem['PROPERTIES']['GIA_TRON_GOI_VE']['VALUE'] ?>">

            <input type="hidden" class="form-control" readonly name="TIME" value="<?= $_REQUEST['depart_time'] ?>"
                   id="exampleInputEmail2" placeholder="Điểm đón">
            <input type="hidden" name="PROPERTY[<?= $arItem['ID'] ?>][SO_CHO]" value="<?= $arItem['NAME']; ?>">
            <input type="hidden" class="form-control" name="PROPERTY[<?= $arItem['ID'] ?>][DIEM_DI]"
                   value="<?= $_REQUEST['depart_pick'] ?>">
            <input type="hidden" class="form-control" name="PROPERTY[<?= $arItem['ID'] ?>][DIEM_DEN]"
                   value="<?= $_REQUEST['depart_drop'] ?>">
            <input type="hidden" class="form-control" name="PROPERTY[<?= $arItem['ID'] ?>][GIA]"
                   value="<?= $arItem['PROPERTIES']['GIA_XE']['VALUE'] ?>">


            <div class="table-responsive" id="ride_container"
                 style="overflow-y: hidden; max-height: 580px; overflow-x: hidden;">
                <!-- </tbody></table> -->
                <div class="showxe_box" partner_id="85" pm_id="31624" server_class="CalcPriceByKm"
                     merged_cost="12467000"
                     priority="2" hide="0" online_booking="1" use_range_time="0" style="" <?php if($arItem['ID'] == 350) echo hidden;?>>
                    <div class="row">
                        <div class="col-md-2 padding_top" style="margin-top: 4px;"><p class="h4 text-uppercase" style="color: #0d0d0d; font-family: "Arial Black", Gadget, sans-serif
                            "> <? echo $arItem["PREVIEW_TEXT"] ?> </p>
                            <p style="font-size: 80%"> <? echo $arItem["DETAIL_TEXT"] ?> </p>
                            <p class="rate">
                            <div class="rating-container theme-krajee-fa rating-md rating-animate rating-disabled">
                                <div class="rating-stars"
                                     style="cursor: not-allowed; position: relative;vertical-align: middle;display: inline-block;overflow: hidden;white-space: nowrap;">
                            <span class="empty-stars" style="color: #aaa;"><span class="star"
                                                                                 style="display: inline-block;margin: 0 3px;text-align: center;">
                                    <i class="glyphicon glyphicon-star-empty"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star-empty"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star-empty"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star-empty"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star-empty"></i></span></span>
                                    <span class="filled-stars"
                                          style="width: 95.7706%; position: absolute;left: 0;top: 0;margin-left: 4px;color: #0288d1;white-space: nowrap;overflow: hidden;-webkit-text-stroke: 1px #777;text-shadow: 1px 1px #999;">
                                <span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span><span class="star">
                                    <i class="glyphicon glyphicon-star"></i></span></span>
                                </div>
                                <div class="caption" style="display: inline-block;
    color: #fff;">
                                    <span class="label label-default">
                                        <?
                                        if($arItem["PREVIEW_TEXT"] == "XE MINI"){
                                            echo rand(45,47)/10;
                                        }

                                        elseif ($arItem["PREVIEW_TEXT"] == "XE STANDARD"){
                                            echo rand(48,49)/10;
                                        }

                                        else{
                                            echo 5;
                                        }

                                        ?>
                                    </span></div>
                            </div>
                            </p> <p hidden><a href="/thong-tin-hang-taxi/xe-hop-dong" target="_blank">Thông tin hãng
                                    xe</a></p>
                        </div>
                        <div class="col-md-2 text-center img-col" style="margin-top: 22px;"><img width="150"
                                                                                                 alt="4 chỗ xe nhỏ"
                                                                                                 title="4 chỗ xe nhỏ"
                                                                                                 src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                        </div>
                        <div class="col-md-3" style="margin-top: 14px;">
                            <p class="h6 partner_note"><i
                                        class="fa fa-share-square-o"></i>
                                <span style="font-weight:bold;color:red;">
                                    <? if($arItem["PREVIEW_TEXT"] == "XE MINI"){

                                        echo "Phù hợp với khách chỉ có hành lý xách tay hoặc vali nhỏ";
                                    }

                                        elseif ($arItem["PREVIEW_TEXT"] == "XE STANDARD"){
                                            echo "Dành cho khách có lượng hành lý trung bình";
                                        }

                                        else {
                                            echo "Đã bao gồm phí cầu đường, phù hợp chuyến đi VIP";
                                    }

                                    ?>

                                </span>
                            </p>
                            <p class="h6"><i class="fa fa-car"></i> <span
                                        class="vehicle_name">Loại xe: <b><?= $arItem['NAME']; ?></b></span></p>
                            <p class="h6 luggage hide"><i class="glyphicon glyphicon-briefcase"></i> 1 Vali nhỏ + 1 Túi
                                xách
                            </p>
                            <p class="secure" style="color: #3f9952; font-size: 80%"><span class="help_icon secure"
                                                                            style="color: #3f9952;"></span> <span
                                        class="use_count"><?= rand(50,60);?></span> người đang
                                chọn xe này</p>
                            <p class="h6 vehicle_frame"><label class="" hidden> <span class="vehicle_unit">Số xe</span>: <span
                                            class="vehicle_count_text">1</span> <i class="fa fa-caret-down"
                                                                                   aria-hidden="true"></i> <select
                                            class="chair_id">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select> </label></p>
                        </div>
                        <div class="col-md-5 price_button_column">
                            <div class="col-md-6 text-center price_column" style="margin-top: 1.5px;">
                                <div class="gia" style="margin-top: 30px;
    margin-bottom: 30px;"><p class="total_price h3 margin_botto_0x"></p>
                                    <p class="price unmerge_cost h4" style="text-decoration: line-through;">
                                        <span id="gia_km<?= $arItem['ID'] ?>"></span></p>
                                    <p class="price unmerge_cost h4">
                                        <span id="gia_<?= $arItem['ID'] ?>"></span>đ</p>
                                    <p class="h6 margin_bottom_0x price_type bold">
                                        <?
                                        $a = $arItem["PROPERTIES"]["GIA_XE_DI"]["VALUE"]/1000;
                                        $a = number_format("$a", 3);
                                        echo $a;
                                        ?>đ
                                        <i></i>tối đa 26Km<br>Từ
                                        Km 27, giá
                                        <i></i>
                                        <?
                                        $b = $arItem["PROPERTIES"]["GIAI_KM_DI"]["VALUE"]/1000;
                                        $b = number_format($b,3);
                                        echo $b
                                        ?>
                                        đ/1km</p> <a class="h6 margin_bottom_0x promotion_description"
                                                                     style="display: none;"></a></div>
                            </div>
                            <div class="col-md-6 booking_button_column" style="margin-top: 18.5px;">
                                <div class="gia text-right padding_top">
                                    <div class="radio book"><label class="radio_label" for="depart_book_select_85_3"
                                                                   style="width: 100%;"> <input
                                                    type="radio" class="hide" name="depart_book_select"
                                                    id="depart_book_select_85_3">
                                            <div class="btn btn_blue book_xe" data-id="<?= $arItem['ID'] ?>">Đặt ngay <br> giá tốt hơn!
                                            </div>
                                        </label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="partner_id" value="85"> <input type="hidden" class="vehicle_service_id"
                                                                               value="3"> <input type="hidden"
                                                                                                 class="vehicle_id"
                                                                                                 data-seat-count="3"
                                                                                                 value="17"
                                                                                                 data-vehicle-service-id="3">
                    <select class="ride_method_id hide">
                        <option data-vehicle-id="17" value="2">Đi chung</option>
                        <option data-vehicle-id="17" value="1">ĐI RIÊNG</option>
                    </select></div>
            </div>

        <? endforeach; ?>
        <div class="row" id="show_more" style="display: none;">
            <div class="col-md-12"><a class="btn gray_bg"> Xem thêm </a></div>
        </div>
</div>
</form>


<script>
    function tinhgia() {
        $.ajax({
            type: "POST",
            url: "/ajax/tinh.gia.php",
            data: $("#result").serialize(),
            dataType: "json",
            cache: false,
            async: false,
            success: function (data) {


                for (i in data['GIA']) {
                    if(typeof(data['GIA_CHUA_KHUYEN_MAI']) !== 'undefined')
                    {
                        $("#gia_km" + i).text(data['GIA_CHUA_KHUYEN_MAI'][i]+"đ");
                        $("#gia_dx_km" + i).text(data['GIA_CHUA_KHUYEN_MAI'][i]+"đ");
                    }
                    $("#gia_" + i).text(data['GIA'][i]);
                    $("#gia_dx" + i).text(data['GIA'][i]+"đ");
                }
            },
            error: function () {
            }
        });
    }

    $(".book_xe").click(function () {
        var id = $(this).attr('data-id');
        $("#select").val(id);
        $.ajax({
            type: "POST",
            url: "/ajax/luu.session.php",
            data: $("#result").serialize(),
            dataType: "json",
            cache: false,
            async: false,
            success: function (data) {
                window.location.href = "/app/app/thong-tin-khach-hang/";
            },
            error: function () {
            }
        });
    });


</script>

