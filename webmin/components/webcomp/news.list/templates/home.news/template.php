<a class="hoatdong-more" href="<?=$arParams['LIST_URL']?>">XEM THÊM</a>
<div class="col-sm-11">
	<div class="row">
		<?foreach($arResult['ITEMS'] as $arItem){
		$logoResized = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 350, "height" => 230),2);
        ?>
        <div class="col-xs-6 item">
			<div class="item-content">
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="img">
					<img src="<?=$logoResized['src']?>" class="img-responsive" alt="<?=$arItem['NAME']?>"/>
				</a>
				<a class="name" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
			</div>
		</div>
        <?}?>
	</div>
</div>
