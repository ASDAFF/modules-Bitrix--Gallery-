<div class="st1_gallery_box">
    <?foreach ($arResult['SECTIONS'] as $key => $item):?>
        <div class="item">
            <img src="<?=$item['PICTURE']['SRC']?>" alt="<?=$item['NAME']?>" />
        </div>
    <?endforeach;?>
</div>