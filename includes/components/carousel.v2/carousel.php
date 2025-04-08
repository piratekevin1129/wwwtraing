<link href="includes/components/carousel.v2/carousel.css" type="text/css" rel="stylesheet" />

<div class="app-carousel-v2">
    <div class="app-carousel-v2-container">
        <div class="app-carousel-v2-wrap" pages="0" page="0" total="<?php echo count($carousel_data['items'])?>">
            <div class="app-carousel-v2-wrapper">
                <?php for($i = 0;$i<count($carousel_data['items']);$i++){ ?>
                    <a class="app-carousel-v2-row" href="<?php echo $carousel_data['items'][$i]['link']?>" target="_blank" style="width: calc(100% / <?php echo count($carousel_data['items'])?>);">
                        <div class="app-carousel-v2-item">
                            <div style="background-image: url(<?php echo $carousel_data['items'][$i]['thumbnail']?>)"></div>
                            <button class="app-carousel-v2-item-play"></button>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
        
        <button class="app-carousel-prev-btn app-carousel-locked-btn" onclick="app_carousel_v2_clickPrev(this)"></button>
        <button class="app-carousel-next-btn" onclick="app_carousel_v2_clickNext(this)"></button>
        <div class="app-carousel-v2-pages"></div>
    </div>
</div>