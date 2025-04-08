function app_carousel_v3_clickPrev(btn){
    var container = btn.parentNode
    var wrap = container.getElementsByClassName('app-carousel-v3-wrap')[0]
    var wrap_current = Number(wrap.getAttribute('page'))
    if(wrap_current>0){
        var new_page = (wrap_current - 1)
        wrap.setAttribute('page',new_page)
    
        var wrapper = container.getElementsByClassName('app-carousel-v3-wrapper')[0]
        
        wrapper.style.left = '0%'
        wrapper.style.left = 'calc(0px - ((100% / '+app_carousel_v3_limit+') * '+new_page+'))'
    }

}

function app_carousel_v3_clickNext(btn){
    var container = btn.parentNode
    var wrap = container.getElementsByClassName('app-carousel-v3-wrap')[0]
    var wrap_current = Number(wrap.getAttribute('page'))
    var limite = Number(wrap.getAttribute('total'))-app_carousel_v3_limit

    if(wrap_current<limite){
        var new_page = (wrap_current + 1)
        wrap.setAttribute('page',new_page)
    
        var wrapper = container.getElementsByClassName('app-carousel-v3-wrapper')[0]
        
        wrapper.style.left = '0%'
        wrapper.style.left = 'calc(0px - ((100% / '+app_carousel_v3_limit+') * '+new_page+'))'
    }

}

var app_carousel_v3_limit = 4

function app_setCarousel_v3(){
    var carousels = document.getElementsByClassName('app-carousel-v3-container')
    for(var i = 0;i<carousels.length;i++){
        var wrap = carousels[i].getElementsByClassName('app-carousel-v3-wrap')[0]
        var total = wrap.getAttribute('total')
        var wrapper = wrap.getElementsByClassName('app-carousel-v3-wrapper')[0]
        
        wrapper.style.width = 'auto'
        wrapper.style.width = 'calc((100% / '+app_carousel_v3_limit+') * '+total+')'
    }
}

app_setCarousel_v3()