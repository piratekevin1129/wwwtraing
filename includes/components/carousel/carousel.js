function app_carousel_clickPrev(btn){
    var container = btn.parentNode
    var wrap = container.getElementsByClassName('app-carousel-wrap')[0]
    var wrap_current = Number(wrap.getAttribute('page'))
    if(wrap_current>0){
        var new_page = (wrap_current - 1)
        wrap.setAttribute('page',new_page)
    
        var wrapper = container.getElementsByClassName('app-carousel-wrapper')[0]
        
        wrapper.style.left = '0%'
        wrapper.style.left = 'calc(0px - ((100% / '+app_carousel_limit+') * '+new_page+'))'
    }

}

function app_carousel_clickNext(btn){
    var container = btn.parentNode
    var wrap = container.getElementsByClassName('app-carousel-wrap')[0]
    var wrap_current = Number(wrap.getAttribute('page'))
    var limite = Number(wrap.getAttribute('total'))-app_carousel_limit

    if(wrap_current<limite){
        var new_page = (wrap_current + 1)
        wrap.setAttribute('page',new_page)
    
        var wrapper = container.getElementsByClassName('app-carousel-wrapper')[0]
        
        wrapper.style.left = '0%'
        wrapper.style.left = 'calc(0px - ((100% / '+app_carousel_limit+') * '+new_page+'))'
    }

}

var app_carousel_limit = 3

function app_setCarousel(){
    var carousels = document.getElementsByClassName('app-carousel-wrap')
    for(var i = 0;i<carousels.length;i++){
        var total = carousels[i].getAttribute('total')
        var wrapper = carousels[i].getElementsByClassName('app-carousel-wrapper')[0]
        wrapper.style.width = 'auto'
        wrapper.style.width = 'calc((100% / '+app_carousel_limit+') * '+total+')'
    }
}

app_setCarousel()