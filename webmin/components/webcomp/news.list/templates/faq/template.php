<div class="faq-wrap" style="background: #f4f4f4;padding-bottom: 80px">
    <div class="container">
        <div class="title" style="color: #777777">Câu Hỏi Thường Gặp </div>
        <div class="panel-group" id="accordion">
            <?
            $i=0;
            foreach ($arResult['ITEMS'] as $arItem){
            $i++;
            ?>
            <div class="panel panel-default">
                <div class="panel-heading" style="background:#1279BD;">
                    <h4 class="panel-title" style="font-size: 14px">
                        <a data-toggle="collapse" data-parent="#accordion"
                           href="#collapse<?=$i?>" style="color:#ffffff;display: block">
                           <?=$i?>. <?=$arItem['NAME']?> </a>
                    </h4>
                </div>
                <div id="collapse<?=$i?>" class="panel-collapse collapse ">
                    <div class="panel-body" style="font-size: 14px">
                        <?=$arItem['PREVIEW_TEXT']?>

                    </div>
                </div>
            </div>
            <?}?>

        </div>
    </div>
</div>