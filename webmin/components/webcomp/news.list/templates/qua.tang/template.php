<div class="ykien-wrap box-shadow-img" style="background:#1279BD;padding-bottom:60px;padding-top:40px;">
    <div class="container">
        <div class="title" style="color: #FFF">TẠI SAO BẠN CHỌN APKA? </div>
        <div class="owl-carousel" id="quatang">
            <?foreach($arResult['ITEMS'] as $arItem){
                //$logoResized = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 199, "height" => 197),2);
                ?>
                <div class="item text-center" style="color: #FFF">
                    <span class="fa-stack fa-lg" style="font-size: 50px;">
                      <i class="fa fa-circle-thin fa-stack-2x"></i>
                      <i class="fa <?=$arItem['PROPERTIES']['ICON_TEXT']['VALUE']?> fa-stack-1x" style="text-align: center;"></i>

                    </span>

                    <p style="text-align: center;padding-top: 20px;font-weight: normal">
                        <?=$arItem['PREVIEW_TEXT']?>
                    </p>

                </div>
            <?}?>
        </div>
    </div>
    <div style="text-align: center;padding: 0px 0px 0px 0px;">

        <a style="display: inline-block;
        background-color: #fff;
        border-radius: 14px;
        border: 1px solid #337ab7;
        padding: 10px 20px;
        font-weight: bold;" href="#carousel-example-generic">ĐẶT XE NGAY</a>
    </div>

</div><!--y kien-->


<!--
<div class="ykien-wrap box-shadow-img" style="background:#1279BD;padding-bottom:60px;padding-top:60px;">
    <div class="container qua_tang">
        <header class="section-header">
            <div class="heading-wrap">
                <h2 class="heading"><span>Quà tặng dành riêng khi mua xe tại An Phát Khánh</span></h2>
            </div>
        </header>
        <div class="owl-carousel" id="quatang">
            <?foreach($arResult['ITEMS'] as $arItem){
    //$logoResized = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 199, "height" => 197),2);
    ?>
                <div class="item text-center" style="color: #FFF">
                    <span class="fa-stack fa-lg" style="font-size: 50px;">
                      <i class="fa fa-circle-thin fa-stack-2x"></i>
                      <i class="fa <?=$arItem['PROPERTIES']['ICON_TEXT']['VALUE']?> fa-stack-1x" style="text-align: center;"></i>

                    </span>

                    <p style="text-align: center;padding-top: 20px;font-weight: normal">
                        <?=$arItem['PREVIEW_TEXT']?>
                    </p>

                </div>
            <?}?>
        </div>
    </div>
</div><!--y kien-->