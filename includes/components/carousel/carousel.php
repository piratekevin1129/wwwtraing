<link href="includes/components/carousel/carousel.css" type="text/css" rel="stylesheet" />

<div class="app-carousel">
    <div class="app-carousel-container">
        <div class="app-carousel-wrap" page="0" total="<?php echo count($carousel_data['items'])?>">
            <div class="app-carousel-wrapper">
                <?php for($i = 0;$i<count($carousel_data['items']);$i++){ ?>
                    <a class="app-carousel-row" href="<?php echo $carousel_data['link']?>" target="_blank" style="width: calc(100% / <?php echo count($carousel_data['items'])?>);">
                        <div class="app-carousel-item">
                            <div style="background-image: url(<?php echo $carousel_data['items'][$i]['thumbnail']?>)"></div>
                            <h4><?php echo $carousel_data['items'][$i]['title']?></h4>
                            <p><?php echo $carousel_data['items'][$i]['description']?></p>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
        <button class="app-carousel-prev-btn app-carousel-locked-btn" onclick="app_carousel_clickPrev(this)"></button>
        <button class="app-carousel-next-btn" onclick="app_carousel_clickNext(this)"></button>
    </div>
</div>