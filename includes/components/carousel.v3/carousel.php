<link href="includes/components/carousel.v3/carousel.css" type="text/css" rel="stylesheet" />

<div class="app-carousel-v3">
    <div class="app-carousel-v3-container">
        <div class="app-carousel-v3-wrap" page="0" total="<?php echo count($carousel_data['items'])?>">
            <div class="app-carousel-v3-wrapper">
                <?php for($i = 0;$i<count($carousel_data['items']);$i++){ ?>
                    <div class="app-carousel-v3-row" style="width: calc(100% / <?php echo count($carousel_data['items'])?>);">
                        <div class="app-carousel-v3-item">
                            <div>
                                <img src="<?php echo $carousel_data['items'][$i]['thumbnail']?>" />
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        
        <button class="app-carousel-prev-btn" onclick="app_carousel_v3_clickPrev(this)"></button>
        <button class="app-carousel-next-btn" onclick="app_carousel_v3_clickNext(this)"></button>
    </div>
</div>