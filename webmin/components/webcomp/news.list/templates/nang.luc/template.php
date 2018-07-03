<div style="background: #f4f4f4" >
    <header class="section-header ">
        <div class="heading-wrap">
            <h2 class="heading"><span> TẠI SAO BẠN NÊN THAM GIA ?</span></h2>
        </div>
    </header>
    <div class="owl-carousel container" id="uudai" style="opacity: 1;display: block;">

        <?foreach($arResult["ITEMS"] as $arItem){
            $logoResized = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 159, "height" => 139),2);
            ?>
            <div class="item text-center">

                <i class="fa <?=$arItem['PROPERTIES']['ICON_TEXT']['VALUE']?>" style="text-align: center;font-size: 60px;color: #17408E"></i>


                <div>
                    <?=$arItem['NAME']?>
                    <p><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
            </div>
        <?}?>

    </div><!--uu dai-->

    <div style="text-align: center;padding: 0px 0px 20px 0px;">

        <a style="display: inline-block;
        border-radius: 14px;
        border: 1px solid #337ab7;
        padding: 10px 20px;
        font-weight: bold;" href="#carousel-example-generic">ĐẶT XE NGAY</a>
    </div>
</div>