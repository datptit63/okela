
<div class="container">
    <div class="row">
        <header class="section-header section-header-type2" style="<?=$arParams['STYLE']?>">
            <div class="heading-wrap" style="margin-bottom: 30px">
                <h2 style="margin-top: 0px;" class="heading heading-type2"><span><?=$arParams['TITLE_BAR']?></span></h2>
            </div>
        </header>
        <div class="TZ-ElementPortfolio ">
            <div class="TZ-Portfolio-Grid">
                <div class="TZ-Vehicle-content">
                    <? Cdebug::dump($arResult['ITEMS']);
                     ?>
                    <?foreach($arResult['ITEMS'] as $arItem){?>
                        <div id="post-<?=$arItem['ID']?>" class="TZ-PortfolioGrid-Item autoshowroom-xethethao  post-1062 vehicle type-vehicle status-publish has-post-thumbnail hentry vehicle_type-xe-hoi make-xethethao model-47">
                            <div class="tz-inner">
                                <div class="TZ-Vehicle-Grid">
                                    <div class="item">
                                        <div class="Vehicle-Feature-Image">
                                            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                                <img  src="<?=CFile::GetPath($arItem['PREVIEW_PICTURE']['ID'])?>" class="attachment-large size-large wp-post-image" alt=""

                                                />                                            </a>

                                        </div>
                                        <h4 class="Vehicle-Title">
                                            <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
                                        </h4>
                                        <div class="vehicle-feature-des">
                                            <p><?=$arItem['PREVIEW_TEXT']?></p>
                                        </div>
                                        <div class="pcd-specs">
                                        <span class='price' style="color: #E5723F;font-weight: bold;">
                                            <?
                                            if($arItem['PROPERTIES']['GIA']['VALUE'] > 0) {
                                                echo number_format($arItem['PROPERTIES']['GIA']['VALUE']).'<i style="font-size: 14px">đ</i>';
                                            }else{
                                                echo "Đã bán";
                                            }?></span>
                                            <span class='registration'>
                                            <?=$arItem['PROPERTIES']['NAM_SAN_XUAT']['VALUE']?></span>

                                            <span class='transmission'>
                                            <?=$arItem['PROPERTIES']['HOP_SO']['VALUE']?></span>

                                            <span class='tag'>
                                            <?=$arItem['PROPERTIES']['TINH_TRANG']['VALUE']?>
                                            </span>
                                            <span class='road'>
                                            <?=number_format(intval($arItem['PROPERTIES']['SO_KM']['VALUE']))?> km

                                            </span>

                                            <span class='color'>
                                            <?=$arItem['PROPERTIES']['MAU_XE']['VALUE']?></span>

                                            <div class="clr">&nbsp;</div> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?}?>

                </div>
            </div>
        </div>
    </div>
</div>
<?if($arParams["SHOW_MORE"]=="Y"){?>
    <div style="text-align: center;padding: 10px 0px 20px 0px;"><a style="display: inline-block;
    border-radius: 14px;
    border: 1px solid #337ab7;
    padding: 10px 20px;
    font-weight: bold;" href="/tim-mua-xe/">Xem thêm xe khác</a> </div>
<?}?>
<script>

    // set column
    var tzDesktop               =   3,
        tztabletportrait        =   2,
        tzmobilelandscape       =   2,
        tzmobileportrait        =   1,
        tzpg_resizeTimer        =  null;

    var $container          =   jQuery('.TZ-Vehicle-content'),
        autoshowroom_resizeTimer    = null;
    /*
     * Method resize image
     */

    /*
     * Method portfolio column
     * @variables tzDesktop
     * @variables tztabletportrait
     * @variables tzmobilelandscape
     * @variables tzmobileportrait
     */
    if ( typeof  tzDesktop == 'undefined') {
        var tzDesktop = 4
    }
    if ( typeof  tztabletportrait == 'undefined') {
        var tztabletportrait = 2
    }
    if ( typeof  tzmobilelandscape == 'undefined') {
        var tzmobilelandscape = 2
    }
    if ( typeof  tzmobileportrait == 'undefined') {
        var tzmobileportrait = 1
    }


    /*
     * Method create tags
     * @variables $filter_status
     */

    function autoshowroom_portfolio_init(tzDesktop , tztabletportrait, tzmobilelandscape, tzmobileportrait){
        var contentWidth    = jQuery('.TZ-Vehicle-content').width();
        var numberItem      = 3;
        var newColWidth     = 0;
        var widthWindwow = jQuery(window).width();
        if (widthWindwow >= 992) {
            numberItem = tzDesktop;
        } else if (  widthWindwow >= 768) {
            numberItem = tztabletportrait ;
        } else if (  widthWindwow >= 550) {
            numberItem = tzmobilelandscape ;
        } else if (widthWindwow < 550) {
            numberItem = tzmobileportrait ;
        }
        newColWidth = Math.floor(contentWidth / numberItem);
        jQuery('.TZ-PortfolioGrid-Item').width(newColWidth);

        var $grid = jQuery('.TZ-Vehicle-content').imagesLoaded( function() {
            $grid.masonry({
                itemSelector: '.TZ-PortfolioGrid-Item',
                percentPosition: true,
                columnWidth: newColWidth,
                containerStyle: null
            });
        });
    }
    jQuery(window).bind('load resize', function() {
        if (autoshowroom_resizeTimer) clearTimeout(autoshowroom_resizeTimer);
        autoshowroom_resizeTimer = setTimeout("autoshowroom_portfolio_init(tzDesktop, tztabletportrait, tzmobilelandscape, tzmobileportrait)", 100);
    });
</script>