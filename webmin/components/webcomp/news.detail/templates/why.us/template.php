<div id="why" style="background: #f4f4f4;" class="box-shadow-img">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 why-list">
                <header class="section-header section-header-type2" style="padding-top: 0px">
                    <div class="heading-wrap" style="margin-bottom: 30px">
                        <h2 style="margin-top: 0px;" class="heading heading-type2"><span><?=$arResult['NAME']?></span></h2>
                    </div>

                </header>

                <?=$arResult['PREVIEW_TEXT']?>
                <!--
			 <a href="<?=$arResult['PROPERTIES']['LINK_DANG_KY_NGAY']['VALUE']?>" class="btn btn-primary why-register-now">Đăng ký ngay</a>
				<a href="<?=$arResult['DETAIL_PAGE_URL']?>" class="btn btn-primary why-more">XEM THÊM</a>

                <br /><br />-->
            </div>
            <div class="col-sm-6">
                <iframe width="100%" height="415"
                        src="<?=$arResult['PROPERTIES']['VIDEO_YOUTUBE']['VALUE']?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div style="text-align: center;padding: 0px 0px 10px 0px;">

        <a style="display: inline-block;
        background-color: #fff;
        border-radius: 14px;
        border: 1px solid #337ab7;
        padding: 10px 10px;
        font-weight: bold;" href="#carousel-example-generic">ĐẶT XE NGAY</a>
    </div>
</div><!--tai sao chon chung toi-->