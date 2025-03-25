function clickAcordeon(head_btn){
    var acordeon = head_btn.parentNode
    var status = acordeon.getAttribute('status')
    if(status=='closed'){
        acordeon.className = 'cursos-detalles-acordeon cursos-detalles-acordeon-opened'
        acordeon.setAttribute('status','opened')
    }else{
        acordeon.className = 'cursos-detalles-acordeon cursos-detalles-acordeon-closed'
        acordeon.setAttribute('status','closed')
    }
}