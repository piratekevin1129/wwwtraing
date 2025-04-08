function app_carousel_v2_clickPrev(btn){
    var container = btn.parentNode
    var wrap = container.getElementsByClassName('app-carousel-v2-wrap')[0]
    var wrap_current = Number(wrap.getAttribute('page'))

    var pages_content = container.getElementsByClassName('app-carousel-v2-pages')[0].getElementsByClassName('app-carousel-v2-page')

    if(wrap_current>0){
        var new_page = (wrap_current - 1)
        wrap.setAttribute('page',new_page)
    
        var wrapper = container.getElementsByClassName('app-carousel-v2-wrapper')[0]
        
        wrapper.style.left = '0%'
        wrapper.style.left = 'calc(0px - (100% * '+new_page+'))'

        for(var p = 0;p<pages_content.length;p++){
            pages_content[p].className = 'app-carousel-v2-page'
        }
        pages_content[new_page].className = 'app-carousel-v2-page active'
    }

}

function app_carousel_v2_clickNext(btn){
    var container = btn.parentNode
    var wrap = container.getElementsByClassName('app-carousel-v2-wrap')[0]
    var wrap_current = Number(wrap.getAttribute('page'))
    var limit = Number(wrap.getAttribute('pages'))

    var pages_content = container.getElementsByClassName('app-carousel-v2-pages')[0].getElementsByClassName('app-carousel-v2-page')
    
    if(wrap_current<(limit-1)){    
        var new_page = (wrap_current + 1)
        wrap.setAttribute('page',new_page)
    
        var wrapper = container.getElementsByClassName('app-carousel-v2-wrapper')[0]
        wrapper.style.left = '0%'
        wrapper.style.left = 'calc(0px - (100% * '+new_page+'))'

        for(var p = 0;p<pages_content.length;p++){
            pages_content[p].className = 'app-carousel-v2-page'
        }
        pages_content[new_page].className = 'app-carousel-v2-page active'
    }
}

var app_carousel_v2_limit = 3

function app_setCarousel_v2(){
    var carousels = document.getElementsByClassName('app-carousel-v2-container')

    for(var i = 0;i<carousels.length;i++){
        var wrap = carousels[i].getElementsByClassName('app-carousel-v2-wrap')[0]

        var total = wrap.getAttribute('total')
        var wrapper = wrap.getElementsByClassName('app-carousel-v2-wrapper')[0]

        var pages = parseInt(total / app_carousel_v2_limit)
        if((pages * app_carousel_v2_limit)<total){
            pages++
        }
        wrap.setAttribute('pages',pages)
        wrapper.style.width = 'auto'
        wrapper.style.width = 'calc((100% / '+app_carousel_v2_limit+') * '+total+')'

        var pages_content = carousels[i].getElementsByClassName('app-carousel-v2-pages')[0]

        for(var p = 0;p<pages;p++){
            var page_div = document.createElement('div')
            page_div.className = 'app-carousel-v2-page'
            if(p==0){
                page_div.className = 'app-carousel-v2-page active'
            }
            pages_content.appendChild(page_div)
        }
    }
}

app_setCarousel_v2()