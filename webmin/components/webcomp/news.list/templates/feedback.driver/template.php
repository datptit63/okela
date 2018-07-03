<div class="ykien-wrap box-shadow-img" style="padding-bottom:60px;">
	<div class="container">
        <header class="section-header " style="padding-top:0px;padding-bottom:40px;">
            <div class="heading-wrap">
                <h2 class="heading"><span> CẢM NHẬN TỪ THÀNH VIÊN</span></h2>
            </div>
        </header>
		<div class="owl-carousel" id="ykien">
			<?foreach($arResult['ITEMS'] as $arItem){
			$logoResized = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 199, "height" => 197),2); 
            ?>
            <div class="item text-center" style="">
		        <img style="border-radius: 50%;border: 2px solid #fff" src="<?=$logoResized['src']?>" alt="<?=$arItem['NAME']?>"/>
			    <p >
			    	<?=$arItem['PREVIEW_TEXT']?>
			    </p>
			    <i><?=$arItem['NAME']?></i>
		    </div>
            <?}?>
		</div>
	</div>
    <div style="text-align: center;padding: 0px 0px 0px 0px;">

        <a style="display: inline-block;
        color: #fff;
        background-color: #00a65a;
        border-radius: 14px;
        border: 1px solid #008d4c;
        padding: 10px 20px;
        font-weight: bold;" href="#carousel-example-generic">ĐẶT XE NGAY</a>
    </div>
</div><!--y kien-->